function showGuideContent(article) {
    let button = document.getElementById('guide-card_button0');
    let rows = document.getElementsByClassName('hidden');
    if(button.innerHTML == 'Voir moins' || button.innerText == 'Voir moins') {
        for (let i = 0; i < rows.length; i++) {
            rows[i].style.display ='none';
        }
        button.innerHTML = 'En savoir plus';
        button.innerText = 'En savoir plus'; 
        document.getElementsByClassName('guide-card')[0].style.height = 'auto';
        document.getElementsByClassName('guide-card')[2].style.height = 'auto';
    }
    else {
        for (let i = 0; i < rows.length; i++) {
            rows[i].style.display ='block';
        }
        button.innerHTML = 'Voir moins';
        button.innerText = 'Voir moins';
        document.getElementsByClassName('guide-card')[0].style.height = 'fit-content';
        document.getElementsByClassName('guide-card')[2].style.height = 'fit-content';
    }

}