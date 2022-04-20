<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="Body">
    <head>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
      <!--Start of Navbar-->
      <header> 
        <a href="#" class="logo"> 
          <img id="nav-logo" src="images/navlogo.jpg">
        </a> 
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
      <!-- sign yup -->
    <div class="signup">
      <div class="loginbox">
        <h3>We missed you :/</h3>
        <img src="images/golf monkey.jfif" alt="greeting monkey" class="avatar">
      <form action="includes/signup.inc.php" method="POST">
        <br>
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="signup-submit">Sign In</button>
        <br>
        <br>
        <a href="signup.html">Don't have an account?</a>
    </form>
      </div>
  </div>
</body>
</html>