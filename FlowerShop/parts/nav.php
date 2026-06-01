
<?php include "header.php";?>
<!--NAV.PHP-->
<body>
  <nav id="topnav" class="navbar navbar-expand-sm sticky-top navbar-fixed-top" style="background-color:rgb(203, 114, 181)">
    <div id="navbox" class="container-fluid bg-transparent mx-2">
      <div class="dropdown">
        <img src="logo1.jpeg" style="width:40px;" class="rounded-pill shadow nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-target="#loginInfo" role="button" aria-haspopup="true" aria-expanded="false"/>
        <div class="dropdown-menu" id="loginInfo">
          <a class="dropdown-item" href="login.php">Admin Login</a>
          <a class="dropdown-item" href="userlogin.php">User Login</a>
          <a class="dropdown-item" href="HomePage.php">Home</a>
        </div>
      </div>
      <button class="navbar-toggler float-sm-end" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mx-2 nav nav-pills">
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="#about">About Us</a></li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="#myteam">Our Team</a></li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="#contact">Contact</a> </li>
          <li class="dropdown">
            <a class="nav-link dropdown-toggle text-uppercase" data-bs-toggle="dropdown" data-bs-target="#cate" role="button">Category</a>
            <ul class="dropdown-menu" id="cate">
              <div style="display:block;">
              <li><a class="dropdown-item text-uppercase" href="Floral_Jewelery.php?category=jewel">FLORAL JEWELLERY</a></li>
              <li><a class="dropdown-item text-uppercase" href="wedding.php?category=wedding" >WEDDING BOUQUETS</a></li>
              <li><a class="dropdown-item text-uppercase" href="Birthday.php?category=birthday">BIRTHDAY BOUQUETS</a></li>
              <li><a class="dropdown-item text-uppercase" href="GiftBox.php?category=gift bxs">GIFT BOXES</a></li>
              <div>
            </ul>
          </li>
        </ul>
      </div>
      <div class="box mx-3"> 
        <a class="navbar-brand nav nav-pill" style="width:35px;">
          <div class="cart-count">0</div>
          <img src="shopping_cart.svg" alt="Avatar Logo" id="cart-icon">
        </a>
      </div>
    </div>
    <div class="cart">
      <div class="cart-title">Cart Items</div>
      <div class="cart-content"></div> 
      <div class="total">
        <div class="total-title">Total</div>
        <div class="total-price">Rs.0</div>
      </div>
      <button class="btn-buy">Place Order</button>
      <ion-icon name="close" id="cart-close"></ion-icon>
    </div>
  </nav>
</body> 
<script>
const btnCart=document.querySelector('#cart-icon');
const cart=document.querySelector('.cart');
const btnClose=document.querySelector('#cart-close');

btnCart.addEventListener('click',()=>{
  cart.classList.add('cart-active');
});

btnClose.addEventListener('click',()=>{
  cart.classList.remove('cart-active');
});

document.addEventListener('DOMContentLoaded',loadShop);

function loadShop(){
  loadContent();

}

function loadContent(){
  //Remove Food Items  From Cart
  let btnRemove=document.querySelectorAll('.cart-remove');
  btnRemove.forEach((btn)=>{
    btn.addEventListener('click',removeItem);
  });

  //Product Item Change Event
  let qtyElements=document.querySelectorAll('.cart-quantity');
  qtyElements.forEach((input)=>{
    input.addEventListener('change',changeQty);
  });

  //Product Cart
  
  let cartBtns=document.querySelectorAll('.add-cart');
  cartBtns.forEach((btn)=>{
    btn.addEventListener('click',addCart);
  });

  updateTotal();
}


//Remove Item
function removeItem(){
  if(confirm('Are You Sure, You want to Remove')){
    let title=this.parentElement.querySelector('.cart-prod-title').innerHTML;
    itemList=itemList.filter(el=>el.title!=title);
    this.parentElement.remove();
    loadContent();
  }
}

//Change Quantity
function changeQty(){
  if(isNaN(this.value) || this.value<1){
    this.value=1;
  }
  loadContent();
}

let itemList=[];

//Add Cart
function addCart(){
 let food=this.parentElement;
 let title=food.querySelector('.product-name').innerHTML;
 let price=food.querySelector('.product-price').innerHTML;
 let imgSrc=food.querySelector('.product-img').src;
 //console.log(title,price,imgSrc);
 
 let newProduct={title,price,imgSrc}

 //Check Product already Exist in Cart
 if(itemList.find((el)=>el.title==newProduct.title)){
  alert("Product Already added in Cart");
  return;
 }else{
  itemList.push(newProduct);
 }


let newProductElement= createCartProduct(title,price,imgSrc);
let element=document.createElement('div');
element.innerHTML=newProductElement;
let cartBasket=document.querySelector('.cart-content');
cartBasket.append(element);
loadContent();
}


function createCartProduct(title,price,imgSrc){

  return `
  <div class="cart-box">
  <img src="${imgSrc}" class="cart-img">
  <div class="detail-box">
    <div class="cart-prod-title">${title}</div>
    <div class="price-box">
      <div class="cart-price">${price}</div>
      <div class="cart-amt">${price}</div>
   </div>
    <input type="number" value="1" class="cart-quantity">
  </div>
  <ion-icon name="trash" class="cart-remove"></ion-icon>
</div>
  `;
}

function updateTotal()
{
  const cartItems=document.querySelectorAll('.cart-box');
  const totalValue=document.querySelector('.total-price');

  let total=0;

  cartItems.forEach(product=>{
    let priceElement=product.querySelector('.cart-price');
    let price=parseFloat(priceElement.innerHTML.replace("Price: PKR",""));
    let qty=product.querySelector('.cart-quantity').value;
    total+=(price*qty);
    product.querySelector('.cart-amt').innerText=" Rs. "+(price*qty);

  });

  totalValue.innerHTML='PKR '+total;


  // Add Product Count in Cart Icon

  const cartCount=document.querySelector('.cart-count');
  let count=itemList.length;
  cartCount.innerHTML=count;

  if(count==0){
    cartCount.style.display='none';
  }else{
    cartCount.style.display='block';
  }


}</script>
</html>
