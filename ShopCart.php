<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BookStore</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
 <style>
* {
  box-sizing: border-box;
}


.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 350px; 
}
     
     .checkout{
         padding-left: 50%;
         width: 200px;
     }
     
     #footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
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



  <!-- Displaying Products Start -->
  <div class="w3-content" style="max-width:1100px;margin-top:70px;">
    <div id="message"></div>
    <div>
      <?php	
			include 'mysqli_connect.php';
  			$res = mysqli_query($con , 'SELECT * FROM cart');
  			while($r=mysqli_fetch_assoc($res)){
  		
		
	
    echo '<div>
        <div>
          <div class="row">
			
            <div class="column">
              <img src="'.$r['image'].'" height="240">
              <h4>'.$r['productName'].'</h4>
            </div>
            
            <div class="column">
                <h5>'.$r['amount'].' CAD</h5>
            </div>

            <div class="column">
                    <b>Quantity : </b>
                    <span>'.$r['quantity'].'</span>
            </div>
            
			<div class="column">
                Final Value : '.$r['total_amount'].' CAD</div>
			</div>
        </div>
      </div>';
      }?>
        
        
    </div>
  </div>
    
    <div class="checkout">
        <form action="checkout.php" method="post">
            <input class="checkout" type="submit" value="Checkout">
        </form>
    </div>
  
    <footer >
  <br><br><br><br><br><br><br><br>
<div id="footer">
Copyright &copy; 2021 Book Store
</div>
</footer>

   

 
</body>

</html>