function showReservationPopUp() {
    let popUp = document.getElementById('reservation-popup');
    popUp.style.display ='flex';
}

function hideModal() {
    let popUp = document.getElementById('reservation-popup');
    popUp.style.display ='none';
}

function showKilometersPopUp() {
    let popUp = document.getElementById('kilometers-popup');
    popUp.style.display ='flex';
}

function hideKilometersModal() {
    let popUp = document.getElementById('kilometers-popup');
    popUp.style.display ='none';
}


/*DATE INPUT*/
document.getElementById("datePicker").valueAsDate = new Date();

function showReservationCancel() {
    let popUp = document.getElementById('cancelReservation-popup');
    popUp.style.display ='flex';
}

function hideCancelModal() {
    let popUp = document.getElementById('cancelReservation-popup');
    popUp.style.display ='none';
    document.location.reload();
}


