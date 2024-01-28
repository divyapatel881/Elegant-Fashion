<?php 
require('top.php');
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
		<div class="col-md-12">
			<div class="cart-container">
			<div class="wrapper">
				<div class="cart-details">
				<?php 
				if(isset($_SESSION['cart'])){
					foreach($_SESSION['cart'] as $key=>$val){
						$productArr=get_product($con,'','',$key);
						$pname=$productArr[0]['name'];
						$mrp=$productArr[0]['mrp'];
						$price=$productArr[0]['price'];
						$image=$productArr[0]['image'];
						$qty=$val['qty'];
						?>
					<div class="cart-info">
						<div class="cart-p-image">
							<img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$image?>" class="img-fluid" alt="...">
						</div>
						<div class="cart-p-details">
							<div class="p-cart-details">
								<div class="p-cart-name"><?php echo $pname?></div>
								<div class="p-cart-filters">
									<div class="cart-filter-qty">
										Qty : <input type="number" id="<?php echo $key?>qty" value="<?php echo $qty?>"/>
									</div>
								</div>
								<div class="p-cart-price">
									<div class="cart-p-price">
									Price : <?php echo $price?>
									</div>
								</div>
								<div class="p-cart-price">
									<div class="cart-p-price">
									<a class="btn btn-primary share-wishlist" href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','update')">Update</a>
									</div>
									
								</div>
								<div class="p-cart-price">
									<div class="cart-p-price">
										<h3>Total Price : <?php echo $qty*$price?></h3>
									</div>
								</div>
							</div>
							<div class="p-delete">
								<div class="p-delete-icon">
									<a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')"><i class="fas fa-trash-alt"></i></a>
								</div>
							</div>
						</div>
					</div>
					<?php } }?>
				</div>
				<div class="place-order cart-btn">
					<button type="button" class="btn"><a href="products.php">Shop More</a></button>
					<button type="button" class="btn"><a href="checkout.php">Place Order</a></button>
				</div>
				</div>
			</div>
		</div>
		<!--	<div class="col-md-4 billing">
			<div class="bill-container">
				<div class="bill-heading">Price Details</div>
				<div class="price-bill">
					<div class="total-price">
						<span>Total MRP</span>
						<span>$999</span>
					</div>
					<div class="total-price">
						<span>Discount on MRP</span>
						<span>$999</span>
					</div>
					<div class="total-price">
						<span>Delivery Charges</span>
						<span>$999</span>
					</div>
				</div>	
				<div class="total-price grand-total">
						<span>Total Amount</span>
						<span>$999</span>
				</div>
			</div>
			
		</div>	-->

	</div>
										
<?php require('footer.php')?>        