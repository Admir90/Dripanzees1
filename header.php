<?php 
    if (session_status() === PHP_SESSION_NONE){
        session_start();
        $connect = mysqli_connect("localhost:3306", "mahs_mozzarelamen", "mustangs", "mahs_mozzarelamen");
    }
    if(isset($_POST["add-to-cart"])) {
      if(isset($_SESSION["shopping-cart"])) {
        $item_array_id = array_column($_SESSION["shopping-cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["shopping-cart"]);
            $item_array = array(
              'item_id'         =>  $_GET["productId"],
              'item_name'       =>  $_POST["hidden-name"],
              'item_price'      =>  $_POST["hidden-price"],
              'item_quantity'   =>  $_POST["quantity"]
            );
            $_SESSION["shopping-cart"] [$count] = $item_array;
        }
        else {
            echo '<script>alert("Item Already Added")</script>';
            echo '<script>window.location="index.php"</script>';

        }
      }
      else {
        $item_array = array (
          'item_id'         =>  $_GET["productId"],
          'item_name'       =>  $_POST["hidden-name"],
          'item_price'      =>  $_POST["hidden-price"],
          'item_quantity'   =>  $_POST["quantity"]
        );
        $_SESSION["shopping-cart"] [0] = $item_array;
      }
    }
    if(isset($_GET["action"]))
    {
      if($_GET["action"] == "delete")
      {
        foreach($_SESSION["shopping-cart"] as $keys => $values)
        {
          if($values["item_id"] == $_GET["id"])
          {
            unset($_SESSION["shopping-cart"][$keys]);
            echo '<script>alert("Item Removed")</script>';
            echo '<script>window.location="index.php"</script>';

          }
        }
      }
    }
  ?>

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
          <a id="logo" href="index.php"><img id="nav-logo" src="https://drive.google.com/uc?export=view&id=1Nj1ceND7sR6Z1TRS1upNYGbvoaNsW0mx"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
          <nav>
            <ul>
              <li><a href="index.php"><h2 class="brand">Dripanzees</h2></a></li>
              <li><a href="index.php"><h2>Home</h2></a></li>
              <li><a href="shop.php"><h2>Shop</h2></a></li>
              <li><a href="about.php"><h2>About</h2></a></li>
              <li><a href="sign-in.php"><h2>Sign In</h2></a></li>
              <li <?php if(!isset($_SESSION['userId'])){echo 'style="display: none;"';}?>>
                        <a class="nav-link" href="checkout.php">Checkout</a>
                    </li>
            </ul>
          </nav>
        </header>
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
