<?php
    include 'header.php';
?>
        <!---Two column section-->
        <div  class="intro" class="container-fluid padding">
          <div  class="row padding">
            <div class="col-md-12 col-lg-6">
              <h2 class="intro-title">Welcome</h2>
              <p>Are you tired of seeing your monkey naked? Then, get some drip fo yo chimp! Yo monkey needs drip and Dripanzees has you covered!</p>
              <br>
            </div>
            <div class="col-lg-6 ">
            <img src="images/intro monkey.jpg" class="img-fluid">
            </div>
            </div>
            </div>
        
        
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

              <!-- Indicators/dots -->
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
              </div>
            
              <!-- The slideshow/carousel -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://drive.google.com/uc?export=view&id=1VsD5IKBqhagmhwEzstPQhanCX7GY_pP6" alt="woman" class="d-block w-100 car-gfg">
                </div>
                <div class="carousel-item">
                  <img src="images/blue dress monkey.jfif" alt="dress" class="d-block w-100 car-gfg">
                </div>
                <div class="carousel-item">
                  <img src="images/customer review.jpg" alt="boi" class="d-block w-100 car-gfg">
                </div>
              </div>
            
              <!-- Left and right controls/icons -->
              <div class="car-button">
              <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
              </button>
              </div>
            </div>
            
        

        <!--Start of Recommended-->
        <div class="container">
          <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-4">
             <div class="card">
              <img class="gfg" src="images/northface.png" alt="Monkey Emoji Chain" class="card-img-top">
              <h5 class="card-title">Monkey Northface Jacket</h5>
              <p class="card-text">2,000+ units sold</p> 
             </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <img class="gfg" src="images/Formal Monkey.jfif" alt="Monkey Emoji Chain" class="card-img-top">
                <h5 class="card-title">Gray Monkey Suit</h5>
                <p class="card-text">1,500+ units sold</p> 
               </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <img class="gfg" src="images/Supreme monkey.jfif" alt="Monkey Emoji Chain" class="card-img-top">
                <h5 class="card-title">Supreme Monkey Jacket</h5>
                <p class="card-text">500+ units sold</p> 
               </div>
            </div>
        </div>
      </div>
    
       <!--end of recommended-->
        <button><a href="https://datadev.devcatalyst.com/~mahs_eggplantemoji/">! Secret button !</a></button>
        <!--Start of Footer-->
        
        
        



<script type="text/javascript">
          window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0)})
        </script>
        <!--End of Footer-->
    </body>


    <?php
    require "footer.php";
  ?>
</html>