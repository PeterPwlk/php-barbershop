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

let koszyk = [];

const orderButtons = document.querySelectorAll('.btorder');
const productInfoList = document.querySelectorAll('.productinfo');
const products = document.querySelectorAll('.product');
products.forEach(product => {
    const img = product.children[0].src;
    const productinfo = product.children[1];
    const name = productinfo.children[0].textContent.replace('<b>','').replace('</b>','');
    const button = productinfo.lastChild.previousSibling;
    button.addEventListener("click", ()=>addToKoszyk({img,name}));
})

function showCart(){
    const products = document.getElementById("products");
    const cart = document.getElementById("cart");
    products.style.display = "none";
    cart.style.display = "block";
}

function showProducts(){
    const products = document.getElementById("products");
    const cart = document.getElementById("cart");
    products.style.display = "block";
    cart.style.display = "none";
}

function addToKoszyk(product){
    if(koszyk.length>0){
        const x = koszyk.filter(item => item.name === product.name)[0];
        if(x){
            x.quantity++; 
          }
          else{
            koszyk.push({
                name: product.name,
                img: product.img,
                quantity: 1
            })
          }
    }
    else{
        koszyk.push({
            name: product.name,
            img: product.img,
            quantity: 1
        })
    }
    updateCart();
}

function deleteItem(productName){
    koszyk = koszyk.filter(item => {
        console.log(item.name === productName)
        return item.name != productName
    })
    updateCart();
}

function updateCart(){
    const cartContainer = document.getElementById('cart');  
    const items = document.createElement('ul');
    koszyk.forEach(item =>{
        const container = document.createElement('li');
        const img  = document.createElement('img');
        img.src = item.img;
        const name = document.createElement('p');
        const nameText = document.createTextNode(`${item.name} x ${item.quantity}`);
        const deleteButton = document.createElement('button');
        const deleteButtonText = document.createTextNode('USUŃ');
        deleteButton.appendChild(deleteButtonText);
        deleteButton.addEventListener('click', ()=>deleteItem(item.name));
        name.appendChild(nameText);
        container.appendChild(img);
        container.appendChild(name);
        container.appendChild(deleteButton);
        container.classList.add("cart-item");
        items.appendChild(container);
    })	
    items.classList.add("cart");
    if(cartContainer.children[1])
    cartContainer.replaceChild(items,cartContainer.children[1])
    else
    cartContainer.appendChild(items);	
}