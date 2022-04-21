<?php
    include 'header.php';
?>
<!-- php for sign up
    <?php
      if(isset($_GET['error'])) {
          if($_GET['error'] == "emptyfields") {
              echo "<p>FILL IN ALL FIELDS NOW!</p>";
          }
          else if ($_GET['error'] == "invaliduidmail") {
              echo "<p>Invalid username and e-mail!</p>";
          }
          else if ($_GET['error'] == "invaliduid") {
              echo "<p>Check ur username again!</p>";
          }
          else if ($_GET['error'] == "invalidmail") {
              echo "<p>Invalid e-mail!</p>";
          }
          else if ($_GET['error'] == "passwordcheck") {
              echo "<p>Yo passwords wrong foo!</p>";
          }
          else if ($_GET['error'] == "usertaken") {
              echo "<p>Sorry not sorry, this username has already been taken!</p>";
          }
      }
      else if ($_GET['signup'] == "success") {
          echo "You did it!";
      }
  ?>
--->
    <div class="signup">
      <div class="signupbox">
        <h3>Come on man, sign up!</h3>
        <img src="images/golf monkey.jfif" alt="greeting monkey" class="avatar">
        <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat password">
        <button type="submit" name="signup-submit">Signup</button>
    </form>
      </div>
  </div>
</body>
</html>