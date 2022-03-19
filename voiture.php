<?php session_start();
$_SESSION['id'] = 2;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPME Team - Voiture</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="main-title">Voiture de service</h1>

    <div class="car-container"> <?php
                                require('Controllers/Car.php');
                                showCar();
                                ?>
        <!-- PLANNING -->
        <table class="car-table">
            <thead>
                <?php
                require_once('Controllers/Time.php');
                ?>
                <tr>
                    <th class="car-table_header">Lundi<br />
                        <?php
                        echo date("d/m/Y", $monday);
                        ?>
                    </th>
                    <th class="car-table_header">Mardi<br />
                        <?php
                        echo date("d/m/Y", $tuesday);
                        ?>
                    </th>
                    <th class="car-table_header">Mercredi<br />
                        <?php
                        echo date("d/m/Y", $wednesday);
                        ?></th>
                    <th class="car-table_header">Jeudi<br />
                        <?php
                        echo date("d/m/Y", $thursday);
                        ?></th>
                    <th class="car-table_header">Vendredi<br />
                        <?php
                        echo date("d/m/Y", $friday);
                        ?></th>
                    <th class="car-table_header">Samedi<br />
                        <?php
                        echo date("d/m/Y", $saturday);
                        ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- LUNDI -->
                    <td class="container-day">
                        <?php
                        include_once('Controllers/Reservation.php');
                        showReservation('lundi');
                        ?>
                    </td>
                    <!-- MARDI -->
                    <td class="container-day">
                        <?php
                        include_once('Controllers/Reservation.php');
                        showReservation('mardi');
                        ?>
                    </td>

                    <!-- MERCREDI -->
                    <td class="container-day">
                        <?php
                        include_once('Controllers/Reservation.php');
                        showReservation('mercredi');
                        ?>
                    </td>

                    <!-- JEUDI -->
                    <td class="container-day">
                        <?php
                        include_once('Controllers/Reservation.php');
                        showReservation('jeudi');
                        ?>
                    </td>

                    <!-- VENDREDI -->
                    <td class="container-day">
                        <?php
                        include_once('Controllers/Reservation.php');
                        showReservation('vendredi');
                        ?>
                    </td>

                    <!-- SAMEDI -->
                    <td class="container-day">
                        <?php
                        include_once('Controllers/Reservation.php');
                        showReservation('samedi');
                        ?>
                    </td>
                </tr>




            </tbody>
        </table>

    </div>

    <!-- POPUP RESERVATION -->
    <?php
    require_once('UI/reservation-form.php');
    ?>

    <!-- POPUP KILOMETRAGE -->
    <?php
    require_once('UI/km-form.php');
    ?>

        <!-- POPUP CANCEL -->
        <?php
    require_once('UI/cancelReservation-form.php');
    ?>
    <script src="app.js"></script>
</body>


</html>