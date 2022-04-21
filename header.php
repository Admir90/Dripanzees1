
<!DOCTYPE html>
<html>
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
    </head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dripanzees</title>
</head>
    <body class="Body">
    <!--Start of Navbar-->
          <header>  
          <a href="index.php" class="logo"> 
            <img id="nav-logo" src="https://drive.google.com/uc?export=view&id=1Nj1ceND7sR6Z1TRS1upNYGbvoaNsW0mx">
          </a>
          <h1 class="brand">Dripanzees</h1>
          <nav>
            <ul>
              <li><a href="index.php"><h2>Home</h2></a></li>
              <li><a href="shop.php"><h2>Shop</h2></a></li>
              <li><a href="about.php"><h2>About</h2></a></li>
              <li><a href="sign-in.php"><h2>Sign In</h2></a></li>
              <li><a href="checkout.php"><h2>Checkout</h2></a></li>
            </ul>
          </nav>
        </header>
        </html>
        <script type="text/javascript">
          window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0)})
        </script>
        <!--End of Navbar-->
        <!-- php for session start -->
        <?php
    $_SESSION['username'] = "admir90";
    echo $_SESSION['username'];

if (!isset($_SESSION['username'])) {
    echo "You are not logged in!";  
} else {
    echo ", Welcome!";
}
?>