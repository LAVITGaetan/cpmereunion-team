<div id="cancelReservation-popup">
    <div class="popup-close" onclick="hideCancelModal()">X</div>
    <div class="popup-header">Supprimer la réservation ?</div>
    <form method="post" action="Controllers/Reservation.php">
        <input class="form-group_input" type="hidden" name="reservation" value="<?php echo $_SESSION['reservation_id'] ?>">
        <input class="form-group_input" type="hidden" name="delete" value="true">
        <div class="popup-button_container">
            <input name="submit" type="submit" value="Supprimer" class="popup-button">
            <button class="popup-button_cancel">Annuler</button>
        </div>
    </form>
</div>