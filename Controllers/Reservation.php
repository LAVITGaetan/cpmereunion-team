<?php
function showReservation($day)
{
    require('Database.php');
    $query = 'SELECT *, `reservation`.`id` AS `reservation_id` FROM `reservation` INNER JOIN `user` ON `reservation`.`user_id`=`user`.`id` WHERE `day`="' . $day . '" ORDER BY `start` ASC';
    $data = $db->query($query)->fetchAll();
    foreach ($data as $row) {

        if ($_SESSION['id'] == $row['user_id']) {
            $closeIcon = '<div onclick="showReservationCancel()" class="day-close">x</div>';
            $_SESSION['reservation_id'] = $row['reservation_id'];
        } else {
            $closeIcon = '';
        }
        echo '<div class="day-reserved">' . $closeIcon . '<div>' . $row['start'] . 'h - ' . $row['end'] . 'h</div><div>' . $row['nom'] . ' ' . $row['prenom'] . '</div></div>';
    }
}

/*Ajout de réservation*/
if (isset($_POST['user']) && !empty($_POST['date']) && !empty($_POST['car']) && !empty($_POST['start']) && !empty($_POST['end'])) {
    require('Database.php');
    $query = 'INSERT INTO reservation(`user_id`,`car_id`,`date`,`day`,`start`,`end`) VALUES(?,?,?,?,?,?)';
    $day = date('D', strtotime($_POST['date']));
    switch ($day) {
        case 'Mon':
            $day = 'lundi';
            break;
        case 'Tue':
            $day = 'mardi';
            break;
        case 'Wed':
            $day = 'mercredi';
            break;
        case 'Thu':
            $day = 'jeudi';
            break;
        case 'Fri':
            $day = 'vendredi';
            break;
        case 'Sat':
            $day = 'samedi';
            break;
    }
    $data = $db->prepare($query)->execute([$_POST['user'], $_POST['car'], $_POST['date'], $day, $_POST['start'], $_POST['end']]);
    header('location:../voiture.php');
}

if (isset($_POST['delete'])) {
    if (isset($_POST['submit']) && isset($_POST['reservation'])) {
        require('Database.php');
        $query = 'DELETE FROM `reservation` WHERE id=?';
        $db->prepare($query)->execute([$_POST['reservation']]);
        header('location:../voiture.php');

    }
    else {
        header('location:../voiture.php');
        
    }
}
