const reserveButtons = document.querySelectorAll('.reserveButton');
reserveButtons.forEach(button => {
    button.addEventListener("click", reserve)
})

function reserve(event){
    const reservation = document.getElementById('reservation');
    const team = document.getElementById('team');
    reservation.style.display = 'block';
    team.style.display = 'none';
    document.getElementById('selectedBarber').innerHTML = event.target.value;
}

