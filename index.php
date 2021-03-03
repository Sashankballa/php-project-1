
<html>

<head>
  <title>BookStore</title>
</head>
    
    
<style>
* {
  box-sizing: border-box;
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


                        </div>
                    </div>
                  </div>';
            }?>
    </div>
  </div>
  
    <footer style="text-align:center">
  <p>Author: Jai Sashank Balla</p>
  <p><a href="mailto:sashankballa@gmail.com">sashankballa@gmail.com</a></p>
</footer>  

 
</body>

</html>