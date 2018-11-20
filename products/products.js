function filterProducts(){
    const selected = document.querySelector('input[name="kat"]:checked').value;
    const kategories = document.querySelectorAll('.kat');
    kategories.forEach(kat => {
        if(kat.id !== selected){
            kat.style.display = "none";
        }
        else{
            kat.style.display = "block";
        }
    })
}

const koszyk = [];

const orderButtons = document.querySelectorAll('.btorder');
orderButtons.forEach(button => {
    button.addEventListener("click", () => addToKoszyk(button.value))
})


function addToKoszyk(product){
    if(koszyk.length>0){
        const x = koszyk.filter(item => item.name === product)[0];
        if(x){
            x.quantity++; 
          }
          else{
            koszyk.push({
                name: product,
                quantity: 1
            })
          }
    }
    else{
        koszyk.push({
            name: product,
            quantity: 1
        })
    }
    console.log(koszyk)
    showKoszyk();
}

function showKoszyk(){
    let items = 'KOSZYK: </br>';  
    koszyk.forEach(item =>{
        items += item.name + ' x' + item.quantity + '</br>';
    })
	
	document.getElementById("koszyk").innerHTML = items;
}