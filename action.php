
<?php
	include 'mysqli_connect.php';
	

	// add product
	if ($_POST['action']=="add"){
	  $name = $_POST['name'];
	  $amount = $_POST['amount'];
	  $image = $_POST['image'];
	  $qty = $_POST['quantity'];
	  

	  $result = mysqli_query($con , "SELECT productName FROM cart WHERE productName= ".$name);
	  if(!$result){
		  $flag=true;
	  }
	  else{
		$flag =false;
	  }
	  echo $flag;
	  if ($flag) {
	    $smt = mysqli_query($con , "INSERT INTO cart (productName,amount,image,quantity,total_amount) VALUES ('$name','$amount','$image','1','$amount')");
	    $qty = $qty - 1;
	    $query2 = mysqli_query($con , "UPDATE product SET quantity='".$qty."' WHERE productName='".$name."'"); 
		echo $query2;
		header('location: ShopCart.php');
	}}
	
	// Checkout
	if ($_POST['action']=="Place Order" ) {
	  $name = $_POST['name'];
	  $email = $_POST['email'];
	  $phone = $_POST['phone'];
	  $grand_total = $_POST['total'];
	  $address = $_POST['address'];
	  $pmode = $_POST['paymode'];
	  $age = $_POST['age'];
        

        

        

//	  $data = '';

	  $smt = mysqli_query($con , "INSERT INTO customer (name,age,email,phone,address,paymentType,totalPrice) VALUES('$name','$age','$email','$phone','$address','$pmode','$grand_total')");
	  $smt2= mysqli_query($con , "SELECT * FROM cart");
	  while($order=mysqli_fetch_assoc($smt2)){
		  $pname=$order['productName'];
		  $pqty=$order['quantity'];
		  $pamount=$order['amount'];
		  $tamount=$order['total_amount'];
		  $addOrder=mysqli_query($con , "INSERT INTO orders (orderName,quantityOrdered,amountOrdered,totalAmount) VALUES('$pname','$pqty','$pamount','$tamount')");
	  }
        
        
        
	}
?>