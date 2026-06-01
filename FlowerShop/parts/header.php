<!--HEADER.PHP-->
<head>
    <title>Floral Fantasia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
<style>

*{
  font-family: 'Lato', sans-serif;
  color:black;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.box{
  color:white;
  width: 30px;
  height: 30px;
  text-align: center;
  position: relative;
}

.cart-count{
  position: absolute;
  background-color: red;
  top: -5px;
  right: 0;
  padding: 2px;
  height: 20px;
  width: 20px;
  font-size: 16px;
  line-height:20px ;
  border-radius: 50%;
  z-index: 99;
}

#cart-icon{
  cursor: pointer;
}

.add-cart{
  position: absolute;
  bottom: 20;
  right: 20;
  background-color: #2ed573;
  color:white;
  padding: 10px;
  font-size: 1.1rem;
  cursor: pointer;
  transition: 0.5s;
}

.add-cart:hover{
  background-color:rgba(255, 0, 0, 0.786);
}
  

.cart{
  position: fixed;
  top: 0;
  right: -100%;
  width: 400px;
  height: 100vh;
  overflow-y: auto;
  overflow-x: hidden;
  padding: 20px;
  background-color: white;
  box-shadow: 0 1px 4px rgba(40, 37, 37, 0.1);
  z-index: 100;
}

.cart-active{
  right:0;
  transition: 0.5s;
}

.cart-title{
  text-align: center;
  font-size: 1.5rem;
  font-weight: 500;
  margin-bottom: 1rem;
  padding-bottom:20px ;
  border-bottom: 1px solid rgba(0,0,0,0.1);
}

.cart-box{
  display: grid;
  grid-template-columns: 32% 50% 18%;
  align-items: center;
  gap: 1rem;
  margin-top: 1rem;
  border-bottom: 1px solid rgba(0,0,0,0.1);
  padding-bottom: 10px;
}

.cart-img{
  width: 75px;
  height: 75px;
  object-fit: cover;
  border:2px solid  rgba(0,0,0,0.1);
  padding: 5px;
}
.detail-box{
  display: grid;
  row-gap: 0.5rem;  
}

.price-box{
  display: flex;
    justify-content: space-between; 
}

.cart-prod-title{
   font-size: 1rem;
   text-transform: uppercase;
   color:#ff6348;
   font-weight: 500;
}

.cart-price{
  font-weight: 500;
}

.cart-quantity{
  border:1px solid rgba(0,0,0,0.1);
  outline:none ;
  width: 2.4rem;
  text-align: center;
  font-size: 1rem;
}

.cart-remove{
  font-size: 24px;
  color:red;
  cursor: pointer;
}

.total{
  display: flex;
  justify-content: flex-end;
  margin-top: 1.5rem;
}

.total-title{
  font-size: 1rem;
  font-weight: 600;
}

.total-price{
  margin-left: 0.5rem;
}

.btn-buy{
  padding: 12px 20px;
  background-color:#2f3542;
  color:#fff;
  border: none;
  font-size: 1rem;
  font-weight: 500;
  cursor: pointer;
}

#cart-close{
  position: absolute;
  top: 1rem;
  right: 0.8rem;
  font-size: 2rem;
  cursor: pointer;
}
</style>
  <style>
    body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #f7f5f5;
    }

    img {
      width: 100%;
      height: auto;
    }

    .main {
      background-image: url(flowerbg.jpeg);
      background-position: center;
      background-size: cover;
      height:100vh;
    }

    nav {
      padding-left: 0px;
      opacity: 70%;
    }

    .navbar a {
      color: rgb(255, 255, 255);
    }

    .nav-item :hover {
      background-color: #f7f5f5;
      color: black;
    }

    #navbox {
      padding: 0%;
      padding-left: 12px;
      padding-right: 12px;
    }

    .dropdown-menu {
      background-color: rgb(216, 165, 218);
      height: auto;
    }

    .dropdown-menu a {
      color: rgb(0, 0, 0);
      font-size: small;
    }

    .heading {
      padding: 140px 176px;
    }

    .heading h1 {
      color: rgb(255, 255, 255);
      font-family: Georgia, 'Times New Roman', Times, serif;
      font-style: italic;
    }

    /* FOOTER */
    .footer {
      background-color: rgb(54, 50, 50);
    }
    /*CARD*/
    .card:hover{
      border:1px solid red;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
      transform: scale(1.05);
    }
    .card img{
      height:300px;
    }
  </style>
</head>