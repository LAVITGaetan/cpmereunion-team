<?php function showCar() {
    require('Database.php');
    $query = 'SELECT * FROM car';
    $data = $db->query($query)->fetchAll();
    foreach ($data as $row) {
        echo '<div class="car-card">
        <img src="assets/outlined-car.svg" alt="" class="car-card_icon">
        <p class="car-card_row">' . $row['name'] . '</p>
        <p class="car-card_row">' . $row['mark'] . '</p>
        <p class="car-card_row">' . $row['license_plate'] . '</p>
        <p class="car-card_row">' . $row['kilometers'] . ' km</p>
        <button class="car-card_reservation" onclick="showReservationPopUp()">Réserver le véhicule</button>
        <button class="car-card_kilometers" onclick="showKilometersPopUp()">Modifier le kilométrage</button>

        </div>';
    }
}

function selectCar() {
    require('Database.php');
    $query = 'SELECT * FROM car';
    $data = $db->query($query)->fetchAll();
    foreach ($data as $row) {
        $id = $row['id'];
        $name = $row['name'];
    echo '<option value="', $id,'">',$name,'</option>';
    }
}

if (isset($_POST['car']) && !empty($_POST['kilometers'])) {
    require('Database.php');
    $query = 'UPDATE `car` SET `kilometers`=? WHERE id=?';
    $db->prepare($query)->execute([$_POST['kilometers'], $_POST['car']]);
    header('location:../voiture.php');

}