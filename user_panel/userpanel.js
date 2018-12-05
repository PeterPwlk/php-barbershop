function getReservations(){
    fetch("../reservation/getUserReservations.php")
    .then(resp => resp.json())
    .then(resp => {
        const reservations = resp.map(JSON.parse);
        console.log(reservations);
        const reservation_list = document.getElementById("reservations_list");
        const content = document.getElementById("content");
        if(reservations.length === 0 ){
            const p = document.createElement("p");
            p.style = "text-align: center";
            p.appendChild(document.createTextNode("Brak rezerwacji"));
            content.insertBefore(p,reservation_list);
        } else {
            if(content.children.length === 2)content.removeChild(content.children[0]);
            reservations.forEach(reservation => {
                reservation_list.appendChild(createReservation(reservation));
            });
        }
        
    })
}

function createReservation(reservation){
    const li = document.createElement("li");
    const barber = document.createElement("p");
    const service = document.createElement("p");
    const data = document.createElement("p");
    barber.appendChild(document.createTextNode(reservation.barber));
    service.appendChild(document.createTextNode(reservation.usluga));
    data.appendChild(document.createTextNode(reservation.data));
    li.appendChild(barber);
    li.appendChild(service);
    li.appendChild(data);
    li.classList.add("reservation");
    return li;
}