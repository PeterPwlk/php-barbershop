const reserveButtons = document.querySelectorAll('.reserveButton');
reserveButtons.forEach(button => {
    button.addEventListener("click", ()=>reserve(button.parentElement.parentElement))
})

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