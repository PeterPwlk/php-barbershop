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

let items = [];

const orderButtons = document.querySelectorAll('.btorder');
orderButtons.forEach(button => {
    button.addEventListener("click", () => addToKoszyk(button.value))
})


function addToKoszyk(item){
    items.push(item);
    console.log(items);    
    showKoszyk();
}

function showKoszyk(){
            
    items.forEach(item =>{


    })
	let koszyk = items;
				
	document.getElementById("koszyk").innerHTML = koszyk;
}