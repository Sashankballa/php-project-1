<?php
	require 'mysqli_connect.php';

	$total = 0;

	$sql = "DELETE FROM cart";
	$result = mysqli_query($con , $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Checkout</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
    
     #footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;
}
</style>
  
</head>

<body>
  <div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="index.php" class="w3-bar-item w3-button">Book Store</a>
    <div class="w3-right w3-hide-small">
      <a href="ShopCart.php" class="w3-bar-item w3-button">Cart</a>
      <a href="checkout.php" class="w3-bar-item w3-button">Checkout</a>
    </div>
  </div>
</div>
  <div class="w3-content" style="max-width:1100px">
    <div>
      <div class="w3-container w3-padding-64">
        <h4>Complete your order!</h4>
        <form action="success.php" method="post">
          <div class="form-group">
            <input type="text" name="name" class="w3-input w3-padding-16" placeholder="Enter name" required>
          </div>
		  <div class="form-group">
            <input type="text" name="age" class="w3-input w3-padding-16" placeholder="Enter Age" required>
          </div>
          <div>
            <input type="email" name="email" class="w3-input w3-padding-16" placeholder="Enter E-Mail" required>
          </div>
          <div>
            <input type="tel" name="phone" class="w3-input w3-padding-16" placeholder="Enter Phone" required>
          </div>
          <div>
            <textarea name="address" class="w3-input w3-padding-16" placeholder="Enter Delivery Address..." required></textarea>
          </div>
          
          <div >
            Transaction mode: <select name="bill" class="w3-input w3-padding-16" required> 
              <option ></option>
              <option >Debit</option>
              <option >Credit</option>
              <option >Cash</option>
            </select>
          </div>
          <div>
            <input type="submit" class="w3-button w3-light-grey w3-section" name="action" class="action" value="Place Order">
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

   <footer >
  <br><br><br><br><br><br><br><br>
<div id="footer">
Copyright &copy; 2021 Book Store
</div>
</footer>

</html>