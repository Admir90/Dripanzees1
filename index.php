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
            <img src="https://drive.google.com/uc?export=view&id=1riKYyeejKJLvbDhvpQ70fNS8_ys-zbBu" class="img-fluid">
            </div>
            </div>
            </div>
            

<?php
$query = "SELECT * FROM products ORDER BY productId ASC";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_array($result))
    {
?>
<div class="product-1">
  <form method="post" action="index.php?action=add&id=<?php echo $row["productId"]; ?>">
  <div class="prod-img-1">
    <img src="<?php echo $row["productImage"]; ?>">
    <h4><?php echo $row["productName"]; ?></h4>
    <h4><?php echo $row["productPrice"]; ?></h4>
    <input type="number" value="1" min="1" name="quantity" max="15">
    <input type="hidden" name="hidden-name" value="<?php echo $row["productName"]; ?>">
    <input type="hidden" name="hidden-price" value="<?php echo $row["productPrice"]; ?>">
    <input type="submit" name="add-to-cart" value="Add to Cart">
  </div>
  </form>
  <?php
    }
  }
  ?>
</div>



<!-- end of php recommended -->





        <!--Start of Recommended
        <div class="container">
          <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-4">
             <div class="card">
              <img class="gfg" src="https://drive.google.com/uc?export=view&id=10QbXy0scXdaIw45coHwg5WdI-lEgc1zA" alt="Monkey Emoji Chain" class="card-img-top">
              <h5 class="card-title">Monkey Northface Jacket</h5>
              <p class="card-text">2,000+ units sold</p> 
             </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <img class="gfg" src="https://drive.google.com/uc?export=view&id=1BGcjX3jYmorXWjVn90eY4mjakF8_BTqj" alt="Monkey Emoji Chain" class="card-img-top">
                <h5 class="card-title">Gray Monkey Suit</h5>
                <p class="card-text">1,500+ units sold</p> 
               </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <img class="gfg" src="https://drive.google.com/uc?export=view&id=1LrtLx1KGq1Hp0qtxvrsB2xQVc3y8HKg0" alt="Monkey Emoji Chain" class="card-img-top">
                <h5 class="card-title">Supreme Monkey Jacket</h5>
                <p class="card-text">500+ units sold</p> 
               </div>
            </div>
        </div>
      </div>
    
       end of recommended-->
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