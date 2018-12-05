const reserveButtons = document.querySelectorAll('.reserveButton');
reserveButtons.forEach(button => {
    button.addEventListener("click", ()=>reserve(button.value))
})

const barbers = document.querySelectorAll(".team_member");
barbers.forEach(barber => {
    const name = barber.children[1].innerHTML;
    const barberSelect = document.getElementById("selectedBarber");
    const option = document.createElement("option");
    option.setAttribute("value", name);
    option.appendChild(document.createTextNode(name));
    barberSelect.appendChild(option);
});

function reserve(event){
    const reservation = document.getElementById('reservation');
    const team = document.getElementById('team');
    reservation.style.display = 'block';
    team.style.display = 'none';
    document.getElementById('selectedBarber').value = event;
}

