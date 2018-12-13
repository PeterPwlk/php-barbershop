function getReservations(){
    fetch("../reservation/getUserReservations.php")
    .then(resp => resp.json())
    .then(resp => {
        const reservations = resp.map(JSON.parse);
        const reservation_list = document.getElementById("reservations_list");
        const content = document.getElementById("content");
        if(reservations.length === 0 ){
            const p = document.createElement("p");
            p.style = "text-align: center";
            p.appendChild(document.createTextNode("Brak rezerwacji"));
            content.insertBefore(p,reservation_list);
        } else {
            if(content.children.length === 2)content.removeChild(content.children[0]);
            const display_setting = 'min';
            console.log(getCookie("PHPSESSID"));
            console.log(document.cookie);
            switch (display_setting){
                case 'min':{
                    const ul = document.createElement("ul");
                    reservations.forEach(reservation => {
                        ul.appendChild(createReservationMed(reservation));
                    });
                    reservation_list.appendChild(ul);
                    break;
                }
                case 'med':{
                    const table = document.createElement("table");
                    const tr = document.createElement("tr");
                    const barber = document.createElement("th");
                    const service = document.createElement("th"); 
                    const data = document.createElement("th"); 
                    barber.appendChild(document.createTextNode("BARBER"));
                    service.appendChild(document.createTextNode("USŁUGA"));
                    data.appendChild(document.createTextNode("DATA"));
                    tr.appendChild(barber);
                    tr.appendChild(service);
                    tr.appendChild(data);
                    table.appendChild(tr);
                    reservations.forEach(reservation => {
                        table.appendChild(createReservationMin(reservation));
                    });
                    table.id = "reservationTable";
                    reservation_list.appendChild(table);
                    break;
                }
                case 'full':{
                    const ul = document.createElement("ul");
                    ul.classList.add("reservations-list");
                    reservations.forEach(reservation => {
                        ul.appendChild(createReservationFull(reservation));
                    });
                    reservation_list.appendChild(ul);
                    break;
                }
            }
        }   
    })
}

function createReservationMed(reservation){
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
    li.classList.add("reservationLI");
    return li;
}

function createReservationMin(reservation){
    const tr = document.createElement("tr");
    Object.values(reservation).forEach(val => {
        const td = document.createElement("td");
        const p = document.createElement("p");
        p.appendChild(document.createTextNode(val));
        td.appendChild(p);
        tr.appendChild(td);
    })
    return tr;
}

function createReservationFull(reservation){
    const container = document.createElement('li');
    const img  = document.createElement('img');
    img.src = "../team/team_member.jpg";
    container.appendChild(img);
    const div = document.createElement('div');
    Object.values(reservation).forEach(val => {
        const p = document.createElement("p");
        p.appendChild(document.createTextNode(val));
        div.appendChild(p);
    });
    div.classList.add("reservations-list-item-info");
    container.appendChild(div);
    container.classList.add("reservations-list-item");
    return container;
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
}

