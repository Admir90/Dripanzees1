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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    </head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="Body">
<!--Start of Navbar-->
<header> 
  <a href="#" class="logo"> 
    <img id="nav-logo" src="images/navlogo.jpg">
  </a> 
  <ul>
    <li><a href="index.html"><h2>Home</h2></a></li>
    <li><a href="shop.html"><h2>Shop</h2></a></li>
    <li><a href="#"><h2>About</h2></a></li>
    <li><a href="sign-in.html"><h2>Sign In</h2></a></li>
  </ul>
</header>
<script type="text/javascript">
  window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0)
  })
</script>
  f
  <!--End of Navbar-->
<!--Caesar Info-->
<br>
<br>
<br>
<br>
<div class="container">
  <div>
<img src="images/Caesar.jfif" class="caesar">
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
  <form action="action_page.php" class="form-input">
    <div>
      <p class="review-text">Give us a review!</p>
    </div>
    <div class="row">
      
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <br>
    <div class="row">
      
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    
    <div class="row">
      <div class="col-75 stars">
        
      <label class="rating-label">
        <p class="rate-us">Rate us</p>
        <div class="star-center">
        <input
          class="rating"
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
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" class="submit-btn">
    </div>
  </form>
</div>
<br>
<br>

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


  <!--Start of Footer-->
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
                  <p class="copyright"><i class="far fa-copyright"></i>Dripanzees</p>
                </div>
          </div>
          <div class="col-sm-3 logo-div" >
            <img src="images/Screenshot_20220120-101847_Chrome - Copy.jpg" class="footer-logo" >
          </div>
        </div>
      </div>
    </footer>

</body>