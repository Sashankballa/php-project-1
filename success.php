
<?php

session_start();
         if(empty($error))
    	  echo '<div>
				<h1>Thank You!</h1>
				<h2>Your Order Placed Successfully!</h2>
                <form action="index.php" method="post">
                <input type="submit" value="Return to store">
                </div>';
                				
?>


