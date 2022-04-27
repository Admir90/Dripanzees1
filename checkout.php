<?php
include 'header.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="checkout.css">

</head>
<body>
<div class='container'> 
        <div class='window'>
          <div class='order-info'>
            <div class='order-info-content'>
              <h2>Order Summary</h2>
              <div class='line'></div>
              <div class='line'></div>
              <table class='order-table overflow-auto'>
                <tbody>
                <?php
                  if(!empty($_SESSION["shopping-cart"]))
                  {
                      $total = 0;
                      foreach($_SESSION["shopping-cart"] as $keys => $values)
                      {
                  
                ?>
                <tr class="blob">
                    <td><img src="<?php echo $row["productImage"]; ?>"></td> 
                    <td><?php echo $values["item_name"]; ?></td>
                    <td><?php echo $values["item_quantity"]; ?></td>
                    <td>$ <?php echo $values["item_price"]; ?></td>
                    <td>$<?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                    <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>">Remove</a></td>
                </tr>

                </tbody>
              </table>
              <div class='line'></div>
              <table class='order-table overflow-auto'>
                <tbody>
                  <tr>
                    <td><img src='https://drive.google.com/uc?export=view&id=1BGcjX3jYmorXWjVn90eY4mjakF8_BTqj' class='full-width'></img>
                    </td>
                    <td>
                      <br> <span class='thin'>Grey Monkey Suit</span>
                      <br> <span class='thin small'> Color: Grey, Size: s-L</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <br><div class='price'>$5000</div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class='line'></div>
              <table class='order-table'>
                <tbody>
                  <tr>
                    <td><img src='https://drive.google.com/uc?export=view&id=1n04un-YRec2w9gEzoQOTH7nSWKPMs2OO' class='full-width'></img>
                    </td>
                    <td>
                      <br> <span class='thin'>Fancy Monkey Hat</span>
                      <br> <span class='thin small'> Color: Brown, Size: s-L</span>
                    </td>
    
                  </tr>
                  <tr>
                    <td>
                      <br><div class='price'>$42,000</div>
                    </td>
                    <hr>
                  </tr>
                </tbody>
              </table>
              <br>
              <div class='line'></div>
              <div class='total'>
              <?php
                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                      }
                      ?>
                      <tr>
                        <td>Total</td>
                        <td><?php echo number_format($total, 2); ?></td>
                      </tr>
                      <?php
                    }
                ?>              
                </table>
              </div>
      </div>
      </div>
              <div class='credit-info'>
                <div class='credit-info-content'>
                  <table class='half-input-table'>
                    <tr><td>Please select your card: </td><td><div class='dropdown' id='card-dropdown'><div class='dropdown-btn' id='current-card'>Visa</div>
                      <div class='dropdown-select'>
                      <ul>
                        <li>Master Card</li>
                        <li>American Express</li>
                        </ul></div>
                      </div>
                     </td></tr>
                  </table>
                  <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
                  Card Number
                  <input class='input-field'></input>
                  Card Holder
                  <input class='input-field'></input>
                  <table class='half-input-table'>
                    <tr>
                      <td> Expires
                        <input class='input-field'></input>
                      </td>
                      <td>CVC
                        <input class='input-field'></input>
                      </td>
                    </tr>
                  </table>
                  <form method="POST">
                  <button class='pay-btn' type="submit"><a href="orderd.php">Checkout</a></button>
                </form>
                  <button class='cancel-btn'>Cancel</button>
                </div>
      
              </div>
            </div>
      </div> 
</body>
</html>
<script>
    var cardDrop = document.getElementById('card-dropdown');
var activeDropdown;
cardDrop.addEventListener('click',function(){
  var node;
  for (var i = 0; i < this.childNodes.length-1; i++)
    node = this.childNodes[i];
    if (node.className === 'dropdown-select') {
      node.classList.add('visible');
       activeDropdown = node; 
    };
})

window.onclick = function(e) {
  console.log(e.target.tagName)
  console.log('dropdown');
  console.log(activeDropdown)
  if (e.target.tagName === 'LI' && activeDropdown){
    if (e.target.innerHTML === 'Master Card') {
      document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/2vbqk5lcpi7hjoc/MasterCard_Logo.svg.png';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'Master Card';
    }
    else if (e.target.innerHTML === 'American Express') {
         document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/f5hyn6u05ktql8d/amex-icon-6902.png';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'American Express';      
    }
    else if (e.target.innerHTML === 'Visa') {
         document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'Visa';
    }
  }
  else if (e.target.className !== 'dropdown-btn' && activeDropdown) {
    activeDropdown.classList.remove('visible');
    activeDropdown = null;
  }
}
</script>