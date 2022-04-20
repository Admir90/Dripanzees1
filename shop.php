<?php
    include "header.php";
?>


<?php
    $mysqli = new mysqli()
?>
      <!--Shop cards-->

      <div class="shop">

      <div class="container">
        <div class="row g-3">
          <div class="col-12 col-md-6 col-lg-4">
           <div class="card">
            <img class="gfg" src="https://drive.google.com/uc?export=view&id=1LrtLx1KGq1Hp0qtxvrsB2xQVc3y8HKg0" alt="Jewelry" class="card-img-top shop-img">
            <button id="button-1"><h4 class="card-title">Supreme Monkey Coat</h4>
            <p class="card-text">$1,000,000</p></button> 
           </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
              <img class="gfg" src="https://drive.google.com/uc?export=view&id=10QbXy0scXdaIw45coHwg5WdI-lEgc1zA" alt="Casual Wear" class="card-img-top shop-img">
              <button id="button-2"><h4 class="card-title">Monkey Northface Jacket</h4>
              <p class="card-text">$9,800</p></button> 
             </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
              <img class="gfg" src="https://drive.google.com/uc?export=view&id=1FseV_5XdrQN1ZAxBMDDpVC0F3eSyYwp7" alt="Formal Wear" class="card-img-top shop-img">
              <button id="button-3"><h4 class="card-title">Long Tee</h4>
              <p class="card-text">$27,000</p></button> 
             </div>
          </div>
        </div>
        <div class="container-2">
      <div class="row g-3">
        <div class="col-12 col-md-6 col-lg-4">
         <div class="card">
          <img class="gfg" src="https://drive.google.com/uc?export=view&id=1BGcjX3jYmorXWjVn90eY4mjakF8_BTqj" alt="Shoes" class="card-img-top shop-img">
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
<?php
    require "footer.php";
  ?>
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



