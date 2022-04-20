<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="Body">
    <header> 
        <a href="#" class="logo"> 
          <img id="nav-logo" src="images/navlogo.jpg">
        </a> 
        <h1 class="brand">Dripanzees</h1>
        <ul>
          <li><a href="index.html"><h2>Home</h2></a></li>
          <li><a href="shop.html"><h2>Shop</h2></a></li>
          <li><a href="about.html"><h2>About</h2></a></li>
          <li><a href="sign-in.html"><h2>Sign In</h2></a></li>
        </ul>
      </header>
      <script type="text/javascript">
        window.addEventListener("scroll", function(){
          var header = document.querySelector("header");
          header.classList.toggle("sticky", window.scrollY > 0)
        })
      </script>
      <!--End of Navbar-->
      <!--Shop cards-->

      <div class="shop">

      <div class="container">
        <div class="row g-3">
          <div class="col-12 col-md-6 col-lg-4">
           <div class="card">
            <img class="gfg" src="images/Supreme monkey.jfif" alt="Jewelry" class="card-img-top shop-img">
            <button id="button-1"><h4 class="card-title">Supreme Monkey Coat</h4>
            <p class="card-text">$1,000,000</p></button> 
           </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
              <img class="gfg" src="images/northface.png" alt="Casual Wear" class="card-img-top shop-img">
              <button id="button-2"><h4 class="card-title">Monkey Northface Jacket</h4>
              <p class="card-text">$9,800</p></button> 
             </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
              <img class="gfg" src="images/monkey t shirt.jfif" alt="Formal Wear" class="card-img-top shop-img">
              <button id="button-3"><h4 class="card-title">Long Tee</h4>
              <p class="card-text">$27,000</p></button> 
             </div>
          </div>
        </div>
        <div class="container-2">
      <div class="row g-3">
        <div class="col-12 col-md-6 col-lg-4">
         <div class="card">
          <img class="gfg" src="images/Formal Monkey.jfif" alt="Shoes" class="card-img-top shop-img">
          <button id="button-4"><h4 class="card-title">Gray Monkey Suit</h4>
          <p class="card-text">$5000</p></button> 
         </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card">
            <img class="gfg" src="images/black suit monkey.jfif" alt="Our Brand Clothes" class="card-img-top shop-img">
            <button id="button-5"><h4 class="card-title">Black Monkey Suit</h4>
            <p class="card-text">$8000</p></button> 
           </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card">
            <img class="gfg" src="images/blue dress monkey.jfif" alt="Hats" class="card-img-top shop-img">
             <button id="button-6"><h4 class="card-title">Blue Monkey Dress</h4>
           <p class="card-text">$9999</p></button> 
           </div>

        </div>
    </div>
  </div>

  <div class="container-3">
    <div class="row g-3">
      <div class="col-12 col-md-6 col-lg-4">
       <div class="card">
        <img class="gfg" src="images/Fancy Monkey.jfif" alt="Shoes" class="card-img-top shop-img">
        <button id="button-7"><h4 class="card-title">Fancy Monkey Hat</h4>
        <p class="card-text">$42,000</p></button> 

       </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
          <img class="gfg" src="images/Minecraft Monkey.jfif" alt="Our Brand Clothes" class="card-img-top shop-img">
          <button id="button-8"><h4 class="card-title">Monkey Minecraft Hat</h4>
          <p class="card-text">$69,000</p></button> 
         </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
          <img class="gfg" src="images/Royalty Monkey.jfif" alt="Hats" class="card-img-top shop-img">
          <button id="button-9"><h4 class="card-title">Monkey Royalty Hat</h4>
          <p class="card-text">$9999999999</p></button> 
         </div>
      </div>
  </div>
</div>       
</div>
      </div>
      <div class="bg-modal">
        <div class="modal-contents">
          <div class="close">+</div>
        </div>
      </div>
<!--end of shop cards-->
<!--Footer -->
<footer>
  <div class="footer">
      <div class="row text-center center">
        <div class="col-sm-3">
          <div class="font-awesome">
            <a href="https://www.facebook.com/catfishcabinjackson"><i style="color: #3b5998"class="fab fa-facebook facebook"></i></a>
            <a href="https://www.yelp.com/biz/catfish-cabin-jackson-2"><i style="color: #1da1f2" class="fab fa-twitter"></i></a>
            <a href="https://twitter.com/catfish_cabin"><i class="fab fa-instagram instagram" id="instagram-logo"></i></a>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="footer-text">
            <p class="footer-words">Address:[CLASSIFIED]</p>
            <p class="footer-words">Location:[CLASSIFIED]</p>
          </div>
        </div>
        <div class="col-sm-3 footer-text footer-text">
            <p class="footer-words">Contact Info:</p>
            <p class="footer-words">Phone: 1-800-420-6969</p>
            <p class="footer-words">Email: Dripanzees@gmail.com</p>
        </div>
          <div class="col-sm-1">
              <div class="footer-text">
                <p class="copyright"><i class="far fa-copyright"></i> Dripanzees</p>
              </div>
        </div>
        <div class="col-sm-3 logo-div" >
          <img src="images/Screenshot_20220120-101847_Chrome.jpg" class="footer-logo" >
        </div>
      </div>
    </div>
  </footer>
<!--End of Footer-->
</body>
</html>
<!-- java for pop up -->
<script>
  document.getElementById('button-1').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
  document.querySelector('body').style.overflow = "hidden";
});
document.getElementById('button-2').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
  document.querySelector('body').style.overflow = "hidden";
});
document.getElementById('button-3').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
  document.querySelector('body').style.overflow = "hidden";
});
document.getElementById('button-4').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
  document.querySelector('body').style.overflow = "hidden";
});
document.getElementById('button-5').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
  document.querySelector('body').style.overflow = "hidden";
});
document.getElementById('button-6').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
  document.querySelector('body').style.overflow = "hidden";
});
document.getElementById('button-7').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
  document.querySelector('body').style.overflow = "hidden";
});
document.getElementById('button-8').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
  document.querySelector('body').style.overflow = "hidden";
});
document.getElementById('button-9').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
  document.querySelector('body').style.overflow = "hidden";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
  document.querySelector('body').style.overflow = "visible";
});
</script>
<script>

 
  function myFunction() {
  
   
  var x = document.getElementById("myTopnav");
  
   
  if (x.className === "topnav") {
  
   
  x.className += " responsive";
  
   
  } else {
  
   
  x.className = "topnav";
  
   
  }
  
   
  }
  
   
  //Get the button
  
   
  var mybutton = document.getElementById("myBtn");
  
   
   
  
   
  // When the user scrolls down 20px from the top of the document, show the button
  
   
  window.onscroll = function() {scrollFunction()};
  
   
   
  
   
  function scrollFunction() {
  
   
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
  
   
  mybutton.style.display = "block";
  
   
  } else {
  
   
  mybutton.style.display = "none";
  
   
  }
  
   
  }
  
   
   
  
   
  // When the user clicks on the button, scroll to the top of the document
  
   
  function topFunction() {
  
   
  document.body.scrollTop = 0;
  
   
  document.documentElement.scrollTop = 0;
  
   
  }
  
   
  </script>
  
   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
  
   
  integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
  
   
  </script>


