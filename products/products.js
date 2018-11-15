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