 <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
           
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
          
            padding: 2%;
        }
        
		.btn-success
		{
			
			background-color:#f44336;
			padding:14px 30px;
			border-radius: 8px;
			  opacity: 0.9;
			transition: 0.3s;
		}
		.btn-success:hover {opacity: 2}
		
		#btnEmpty{
			
			margin-top:=10px;
			padding:14px 40px;
		}
		
		.total{
			float:right;
			margin-top:-60px;
			border: #999;
			background-color:none;
			height:200px;
			width:300px;
			display: grid;
			 position: fixed;
			right:0;
			
			
		
			 
			
		}
		div .total .chkout{
			
			margin-top:20px;
			padding:14px 40px;
			background-color:#f44336;
			cursor:pointer;
			
			
			
			
		}
		div .total .chkout:hover {background-color: #f21707}

		div .total.chkout:active {
			background-color: #f44336;
			box-shadow: 0 5px #666;
			transform: translateY(4px);
		}
		hr{
			border:1px solid black ;
			margin-top:-20px;
		}
		.title2
		{
			text-align:left;
		}
		#BGI
		{
			
		}
		
   

		
    </style>
<?php
    
	$total=0;
	
		
   require 'config.php';
   
   session_start();
    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["RoomID"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["RoomID"],
                    'item_name' => $_POST["hidden_name"],
					'item_location' =>$_POST["hidden_location"],
                    'product_price' => $_POST["hidden_price"],
                   
					
				
				
					
				
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="Product.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="Product.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["RoomID"],
                'item_name' => $_POST["hidden_name"],
				'item_location' =>$_POST["hidden_location"],
                'product_price' => $_POST["hidden_price"],
                
				
				
				
				
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["RoomID"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="mycart.php"</script>';
                }
            }
        }
    }
	if(isset($_GET["action"])){
		if($_GET["action"]=="empty"){
			
			unset($_SESSION["cart"]);
		}
		
	}
?> 
<html>
<body id="BGI">
 <a id="btnEmpty" href="mycart.php?action=empty" style="float:right;"><button class="btn-success">Empty Cart</button></a>
 <div style="clear: both"></div>
        <h2 class="title2">My Bookings</h2>
		<hr/>
		<br/>
        <div class="table-responsive">
            <table class="mycart">
            <tr>
				
                <th width="10%">Room type</th>
				<th width="10%">Location</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
							 
                            <td><?php echo $value["item_name"]; ?></td>
							<td><?php echo $value["item_location"]; ?></td>
                            <td> Rs <?php echo $value["product_price"]; ?></td>
                            <td>
                               Rs <?php echo number_format($value["product_price"]); ?></td>
                            <td><a href="mycart.php?action=delete&RoomID=<?php echo $value["product_id"]; ?>"><button
                                        class="btn-success">Remove Item</button></a></td>
						</tr>				
			

					
					
                        
                        <?php
						
                        $total = $total + ( $value["product_price"]);
                    }
                        ?>
						
                      
					
				</table>		
                       
					
                        <?php
                    }
                ?>
				<div>
				<table class="total">
				
						
					<tr>
						<td>Subtotal</td>
						<td>Rs &nbsp<?php   echo number_format($total,2);?>;</td>
					</tr>
					<tr>
						<td>&nbsp Discount</td>
						<td>-</td>
					</tr>	
					<tr>
					
						<th>Total</th>
						<td>Rs &nbsp<?php echo number_format($total,2);?>;</td>
					</tr>
					<tr>
					<<td><input type="submit" name="chkout" class="chkout" value="Checkout"></td>
					<td><a href="Product.php"><input type="submit" name="chkout" class="chkout" value="Add Items" ></a></td>
					</tr>
					
				</table>
				</div>
        </div>

    </div>
</body>
</html>	