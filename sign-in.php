
      <script type="text/javascript">
        window.addEventListener("scroll", function(){
          var header = document.querySelector("header");
          header.classList.toggle("sticky", window.scrollY > 0)
        })
      </script>
      <?php
    include 'header.php';
?>

      <!-- sign yup -->
    <div class="signup">
      <div class="loginbox">
        <h3>We missed you :/</h3>
        <br>
        <img src="https://drive.google.com/uc?export=view&id=1b8-iPwmt7RcDySk4ruSxe7y5VPCd05-C" alt="greeting monkey" class="avatar">
        <?php
                if (isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.inc.php" method="POST">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>';
                } 
                else {
                    echo '<form action="includes/login.inc.php" method="POST">
                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input type="password" name="pwd" placeholder="Password...">
                    <button class="log-btn"type="submit" name="login-submit">Log In Buddy!</button>
                </form>
                <a href="signup.php">You aint got no account?!</a>';  
                }
                
            ?>



        <!--      <form action="includes/signup.inc.php" method="POST">
        <br> <input type="text" name="mail" placeholder="E-mail"> 
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="signup-submit">Sign In</button>
        <br>
        <br>
        <a href="signup.php">Don't have an account?</a>
    </form> -->
      </div>
  </div>
  <?php
    require "footer.php";
  ?>
</body>
</html>