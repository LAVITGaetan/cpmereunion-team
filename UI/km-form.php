<div id="kilometers-popup">
        <div class="popup-close" onclick="hideKilometersModal()">X</div>
        <div class="popup-header">Modifier le kilométrage</div>
        <form method="post" action="Controllers/Car.php">
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

                <label class="form-group_label">Nombre de kilométres</label>
                <input class="form-group_input" type="text" name="kilometers">
            </div>

            <div class="popup-button_container"> <input type="submit" value="Modifier" class="popup-button">
                <input type="submit" value="Annuler" class="popup-button_cancel">
            </div>

        </form>
    </div>