
document.getElementById("reservationform").addEventListener("submit", submitReservation);

function getOffer(){
    fetch("getOffer.php")
    .then(resp => resp.json())
    .then(resp => {
        const uslugi = resp.map(JSON.parse);
        const table = document.getElementById("offer");
        uslugi.forEach(usluga => {
            table.appendChild(createRow(usluga));
        })
    })
}

function createRow(offer){
    const tr = document.createElement('tr');
    const name = document.createElement('td');
    name.appendChild(document.createTextNode(offer.Nazwa));
    const price = document.createElement('td');
    price.appendChild(document.createTextNode(offer.Cena + " zł"));
    const button = document.createElement('button');
    button.appendChild(document.createTextNode("REZERWUJ"));
    button.addEventListener("click", ()=>reserve(button.parentElement.parentElement));
    button.classList.add("reserveButton");
    tr.appendChild(name);
    tr.appendChild(price);
    const tdbutt = document.createElement('td');
    tdbutt.appendChild(button);
    tr.appendChild(tdbutt);
    return tr;
}

function reserve(parent){
    const reservation = document.getElementById('reservation');
    const offer = document.getElementById('offer');
    const selected = parent.children[0].textContent;
    const price = parent.children[1].textContent;
    reservation.style.display = 'block';
    offer.style.display = 'none';
    document.getElementById('selectedOffer').innerHTML = selected;
    document.getElementById('price').innerHTML = "Cena: " + price;
}

function goBack(){
   document.getElementById('reservation').style.display = 'none';
   document.getElementById('offer').style.display = 'table';
}

function submitReservation(){
    alert("Dokonałeś rezerwacji");
}