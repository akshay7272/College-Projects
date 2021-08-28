

const btn = document.querySelectorAll(".add_cart_btn");

const products = [ ];

for (var i=0; i<btn.length; i++)
{
  let cartBtn = btn[i]
  cartBtn.addEventListener('click', ()=>{
  let product = {
        image: event.target.parentElement.parentElement.children[0].src,
        name: event.target.parentElement.parentElement.children[1].children[0].textContent,
        price: event.target.parentElement.parentElement.children[1].children[1].textContent,

        totalPrice: parseInt(event.target.parentElement.parentElement.children[1].children[1].textContent),
        quantity: 1
      }

      addItemToLocal(product)
  });
}

function addItemToLocal(product){
  let cartItem = JSON.parse(localStorage.getItem('prdInCart'))
  
  if (cartItem === null)
  {
   products.push(product)
   localStorage.setItem('prdInCart', JSON.stringify(products))

  }else{
    cartItem.forEach(item => {
       if(product.name == item.name){
        product.quantity = item.quantity +=1;
        product.totalPrice = item.totalPrice += product.totalPrice;
       }else{
        products.push(item)
       }
    });
    products.push(product)
  }
    localStorage.setItem('prdInCart',JSON.stringify(products))
    window.location.reload()
}

function dispCartItem(){
  let ChkButton = document.querySelector(".Checkout");
  let html =' ';
  let cartItem = JSON.parse(localStorage.getItem('prdInCart'))
  
  if (cartItem == null || cartItem.length ==0)
{
  ChkButton.disabled = true;

   html  += `
  <h6>cart does not have any item</h6> `
    }

  cartItem.forEach(item => {
      html += 

      `<div class="cartlist">
              <div class="forImage"><img src="${item.image}" alt=""></div>
               <div class="forName"><h5>${item.name}</h5></div>
              <div class="forPrice"> <h5>${item.price}</h5></div>
              <div class="forQuantity"> <h5>${item.quantity}</h5></div>
              <div class="forTotal"> <h5>${item.totalPrice}</h5></div>
               <div class="reoveItem"><button type="button" class="btn btn-danger Remove">Remove</button></div>
               </div>
      `
  });
  document.querySelector('.cartdisp').innerHTML = html;
}
dispCartItem()


function cartNumberDisplay(){
 
 let cartNumbers = 0;
 let cartItem = JSON.parse(localStorage.getItem('prdInCart')) 
  cartItem.forEach(item =>{
   cartNumbers = item.quantity += cartNumbers;
  });
document.querySelector(".top_cart").textContent = cartNumbers;
}

cartNumberDisplay()



const removeItem = document.getElementsByClassName('reoveItem')

for (var i=0; i<removeItem.length; i++){
  let removeBtn = removeItem[i]

  removeBtn.addEventListener('click', () =>{
    let cartItem = JSON.parse(localStorage.getItem('prdInCart')) 
    console.log(event.target.parentElement.parentElement.children[1].children[0].textContent);
    cartItem.forEach(item =>{
           
  if(item.name != event.target.parentElement.parentElement.children[1].children[0].textContent)
 products.push(item)

    });
 localStorage.setItem('prdInCart',JSON.stringify(products))
    window.location.reload()
  });
}


function subTotal(){
    let subTotal = 0;
    let cartItem = JSON.parse(localStorage.getItem('prdInCart'))

     cartItem.forEach(item => {
       subTotal = item.totalPrice += subTotal
     });
     document.querySelector('.priceView h3').textContent = subTotal
}

subTotal()