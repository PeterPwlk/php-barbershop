
function reserve(event){
    const reservation = document.getElementById('reservation');
    const team = document.getElementById('team');
    reservation.style.display = 'block';
    team.style.display = 'none';
    document.getElementById('selectedBarber').value = event;
}

function loadContent(){
    getOffer();
    getTeamMembers();
}

function getOffer(){
    fetch("../offer/getOffer.php")
    .then(resp => resp.json())
    .then(resp => {
        const uslugi = resp.map(JSON.parse);
        const services = document.getElementById("selectedService");
        uslugi.forEach(usluga => {
            services.appendChild(createSelect(usluga));
        })
    })
}

function getTeamMembers(){
    fetch("getTeamMembers.php")
    .then(resp => resp.json())
    .then(resp => {
        const barbers = resp.map(JSON.parse);
        const team = document.getElementById("team_members");
        console.log(team);
        barbers.forEach(barber => {
            team.appendChild(createBarber(barber));
        });
        updateBarberSelect();
        setReserveButtons();
    })
}

function createBarber(barber){
    const li = document.createElement("li");
    const img = document.createElement("img");
    const name = document.createElement("p");
    const level = document.createElement("p");
    const button = document.createElement("button");
    img.src="team_member.jpg";
    img.alt="team member";
    img.classList.add("team_member_img");
    name.appendChild(document.createTextNode(barber.pseudo));
    name.classList.add("nickname");
    level.appendChild(document.createTextNode(barber.ranga));
    level.classList.add("level");
    button.appendChild(document.createTextNode("REZERWUJ"));
    button.value=barber.pseudo;
    button.classList.add("reserveButton");
    li.appendChild(img);
    li.appendChild(name);
    li.appendChild(level);
    li.appendChild(button);
    li.classList.add("team_member");
    return li;
}

function createSelect(service){
    const option = document.createElement("option");
    option.setAttribute("value", service.Nazwa);
    option.appendChild(document.createTextNode(service.Nazwa));
    return option;
}

function updateBarberSelect(){
    const barbers = document.querySelectorAll(".team_member");
    barbers.forEach(barber => {
        const name = barber.children[1].innerHTML;
        const barberSelect = document.getElementById("selectedBarber");
        const option = document.createElement("option");
        option.setAttribute("value", name);
        option.appendChild(document.createTextNode(name));
        barberSelect.appendChild(option);
    });
}

function setReserveButtons(){
    const reserveButtons = document.querySelectorAll('.reserveButton');
    reserveButtons.forEach(button => {
        button.addEventListener("click", ()=>reserve(button.value))
    })
}


