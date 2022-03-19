<div id="reservation-popup">
        <div class="popup-close" onclick="hideModal()">X</div>
        <div class="popup-header">Réserver un véhicule</div>
        <form method="post" action="Controllers/Reservation.php">
            <input class="form-group_input" type="hidden" name="user" value="<?php echo $_SESSION['id'] ?>">

            <div class="form-group">
                <label class="form-group_label">Choix du véhicule</label>
                <select class="form-group_select" name="car" id="">
                    <?php
                    require_once('Controllers/Car.php');
                    selectCar();
                    ?>
                </select>
            </div>
            <div class="form-group">

                <label class="form-group_label">Date de réservation</label>
                <input class="form-group_input" type="date" name="date" id="datePicker">
            </div>
            <div class="form-group">
                <label class="form-group_label">Départ</label>
                <input type="time" class="form-group_select" name="start" id="">
            </div>
            <div class="form-group">
                <label class="form-group_label">Arrivée</label>
                <input type="time" class="form-group_input" type="end" name="end" id="">
            </div>
            <div class="popup-button_container"> <input type="submit" value="Réserver" class="popup-button">
                <input type="submit" value="Annuler" class="popup-button_cancel">
            </div>

        </form>
    </div>