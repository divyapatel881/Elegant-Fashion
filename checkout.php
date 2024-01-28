<?php
	include 'top.php';
?>
<?php 
if(!isset($_SESSION['cart']) || count($_SESSION['cart'])==0){
	?>
	<script>
		window.location.href='index.php';
	</script>
	<?php
}

$cart_total=0;

if(isset($_POST['submit'])){
	$address=get_safe_value($con,$_POST['address']);
	$city=get_safe_value($con,$_POST['city']);
	$pincode=get_safe_value($con,$_POST['pincode']);
	$payment_type=get_safe_value($con,$_POST['payment_type']);
	$user_id=$_SESSION['USER_ID'];
	foreach($_SESSION['cart'] as $key=>$val){
		$productArr=get_product($con,'','',$key);
		$price=$productArr[0]['price'];
		$qty=$val['qty'];
		$cart_total=$cart_total+($price*$qty);
		
	}
	$total_price=$cart_total;
	$payment_status='pending';
	if($payment_type=='cod'){
		$payment_status='success';
	}
	$order_status='1';
	$added_on=date('Y-m-d h:i:s');
	
	
	mysqli_query($con,"insert into `order`(user_id,address,city,pincode,payment_type,payment_status,order_status,added_on,total_price) values('$user_id','$address','$city','$pincode','$payment_type','$payment_status','$order_status','$added_on','$total_price')");
	
	$order_id=mysqli_insert_id($con);
	
	foreach($_SESSION['cart'] as $key=>$val){
		$productArr=get_product($con,'','',$key);
		$price=$productArr[0]['price'];
		$qty=$val['qty'];
		
		mysqli_query($con,"insert into `order_detail`(order_id,product_id,qty,price) values('$order_id','$key','$qty','$price')");
	}
	
	unset($_SESSION['cart'])
	?>
	<script>
		window.location.href='thank_you.php';
	</script>
	<?php
}
?>
<?php 
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='login.php';
	</script>
	<?php
}
?>

		<div class="row">
		<div class="col-md-12 col-lg-12 col-sm-12">
			<img src="images/contactus.jpg" class="img-fluid w-100" alt="...">
		</div>
		<div class="col-md-12 col-lg-12 col-sm-12">
			<div class="bread-cumb-main">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Library</a></li>
				  </ol>
				</nav>
			</div>
		</div>
		</div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
			<div class="row">
				<div class="col-md-8">
			<form method="post">
				<div class="cart-container">
					<div class="cart-details">
						<div class="Address-details">
							<div class="ship-address">
							<h6>Enter Delivery Address</h6>
							</div>
						</div>
						<div class="Address-info">
							<div class="Address-details">
								<div class="ship-address">
								<input type="text" name="address" placeholder="Street Address" required>
								</div>
							</div>
							<div class="Address-details">
								<div class="ship-address">
									<input type="text" name="city" placeholder="City/State" required>
								</div>
							</div>
							<div class="Address-details">
								<div class="ship-address">
									<input type="text" name="pincode" placeholder="Post code/ zip" required>
								</div>
							</div>
						</div>
					</div>
				</div>

			<div class="cart-container">
			<div class="cart-details">
			<div class="Address-details">
			<div class="ship-address">
			<h6>Payment Method</h6>
			</div>
			</div>
			<div class="Address-info">
			<div class="single-method">
			COD <input type="radio" name="payment_type" value="COD" required/>
			&nbsp;&nbsp;PayU <input type="radio" name="payment_type" value="payu" required/>
			</div>
			<div class="single-method">

			</div>
			</div>
			</div>
			</div>
			
		</div>
		 
		<div class="col-md-4 billing">
			<div class="bill-container">
				<div class="bill-heading">Your Order</div>
				<?php 
				$cart_total=0;
					foreach($_SESSION['cart'] as $key=>$val){
						$productArr=get_product($con,'','',$key);
						$pname=$productArr[0]['name'];
						$mrp=$productArr[0]['mrp'];
						$price=$productArr[0]['price'];
						$image=$productArr[0]['image'];
						$qty=$val['qty'];
						$cart_total=$cart_total+($price*$qty);
						?>
				<div class="price-bill">
					<div class="total-price">
						<img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$image?>" class="img-fluid" alt="...">
					</div>
					<div class="total-price">
						<div class="p-cart-name"><?php echo $pname?></div>
					</div>
					<div class="total-price">
						<div class="cart-p-price">
							Price : <?php echo $price*$qty?>
						</div>
					</div>
					<div class="p-delete">
						<div class="p-delete-icon">
							<a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')"><i class="fas fa-trash-alt"></i></a>
						</div>
					</div>
				</div>	
					<?php } ?>
				<div class="grand-total">
						<span>Total Amount : <?php echo $cart_total?></span>
				</div>
				<div class="place-order">
					<button type="submit" class="btn" name="submit">Place Order</button>
			</div>
			</div>
			
		</div>	
		
			</form>
	</div>
        						
<?php require('footer.php')?>        