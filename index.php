<html>
<head>
  <title>BookStore</title>
</head>
    
    
<style>
* {
  box-sizing: border-box;
}

    #footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;
}

.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 200px; 
}
    
    #buy {
        width: 200px;
        position: relative;
        left: 500;
        top: -80;
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
    <div>
      <?php	
			include 'mysqli_connect.php';
  			$res = mysqli_query($con , 'SELECT * FROM product');
  			while($r=mysqli_fetch_assoc($res)){
  		
		
	
    echo '<div>
        <div>
          <div class="row">
		  
                <div class="column">
                    <img src="'.$r['image'].'" height="240">
                    <h4>'.$r['productName'].'</h4>
                </div>
            
                <div class="column">
                    <h3>'.$r['amount'].' CAD</h3>
                </div>
              
                <div class="column">
                    <h4> Remaining Quantity : <span>' .$r['quantity'].'</span></h4>  
                </div>

                <div class="column">
                  <form method="post" action="action.php">
                    <input type="hidden" class="id" name="id" value="'. $r['productId'] .'">
                    <input type="hidden" class="name" name="name" value="'.$r['productName'] .'">
                    <input type="hidden"  name="amount" value="'. $r['amount'] .'">
                    <input type="hidden" name="image" value="'.$r['image'] .'">
					<input type="hidden" name="quantity" value="'.$r['quantity'].'">
                    <input type="hidden" class="action" name="action" value="add">
					<button class="btn" type="submit" id="buy" name="button"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
                  </form>
                </div>
            </div>
        </div>
      </div>';
      }?>
    </div>
  </div>
  
    <footer >
  <br><br><br><br><br><br><br><br>
<div id="footer">
Copyright &copy; 2021 Book Store
</div>
</footer>  

 
</body>

</html>