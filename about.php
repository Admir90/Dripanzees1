<?php
    include 'header.php';
?>
  
<!--Caesar Info-->
<br>
<br>
<br>
<br>
<div class="container">
  <div>
<img src="https://drive.google.com/uc?export=view&id=1U51uivgLmZBCIt_dVVtfP-e7KQqE8yWC" class="caesar">
  </div>
  <br>
  <div style="background-color: #000; margin-right: 25%; margin-left: 25%;">
<p class="caesar-text">Caesar has been the model for our products for 14 years. When Caesar’s mother, Ooga Booga, was giving birth to him at the local zoo Adolfo managed to “rescue” him by jumping the fence and takeing him. We raised caesar as a group and treated hime like a normal child. As he got older he became insecure about being naked. This is Where Dripanzees started.</p>
  </div>
</div>



<!--Caesar Info-->
<!-- Carousel -->

<!-- End Carousel -->
<!-- Review Form -->
<br>
<br>
<div class="form-container">
  <form action="connect.php" method="POST" class="form-input">
    <div>
      <p class="review-text">Give us a review!</p>
    </div>
    <div class="row">
      
      <div class="col-75">
        <input type="text" id="fname" name="firstName" placeholder="Your name..">
      </div>
    </div>
    <br>
    <div class="row">
      
      <div class="col-75">
        <input type="text" id="lname" name="lastName" placeholder="Your last name..">
      </div>
    </div>
    
    <div class="row">
      <div class="col-75 stars">
        
      <label class="rating-label">
        <p class="rate-us">Rate us</p>
        <div class="star-center">
        <input
          class="rating"
          name="rating"
          max="5"
          oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)"
          style="--value:0"
          type="range"
          value="2">
      </label>
      </div>
    </div>
    </div>
    <div class="row">
      
      <div class="col-75">
        <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      
      <input type="submit" value="Submit" class="submit-btn">
    </div>
  </form>
</div>
<br>
<br>
<button><a href="https://datadev.devcatalyst.com/~mahs_minions/index.php">Is this secret too?</a></button>
<script>
  const btn = document.querySelector("button");
  const post = document.querySelector(".post");
  const widget = document.querySelector(".star-widget");
  const editBtn = document.querySelector(".edit");
  btn.onclick = ()=>{
    widget.style.display = "none";
    post.style.display = "block";
    editBtn.onclick = ()=>{
      widget.style.display = "block";
      post.style.display = "none";
    }
    return false;
  }
</script>



<!-- End Review Form -->


<?php
    require "footer.php";
  ?>

</body>
