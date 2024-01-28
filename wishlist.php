<?php 
require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
$uid=$_SESSION['USER_ID'];

$res=mysqli_query($con,"select product.name,product.image,product.price,product.mrp,wishlist.id from product,wishlist where wishlist.product_id=product.id and wishlist.user_id='$uid'");
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
				<div class="row row-container ">
			<div class="col-md-2">
				<div class="list-group">
				  <h5 class="list-group-item active cat-title">
					Categories
				  </h5>
				  <?php
					foreach($cat_arr as $list){
						?>
						<a class="list-group-item" href="categories.php?id=<?php echo $list['id']?>"><?php echo $list['categories']?></a>
						<?php
					}
					?>
				</div>
			</div>
			<div class="col-md-10">
				<div class="row product-container">
				<?php
				while($row=mysqli_fetch_assoc($res)){
				?>
					<div class="col-md-4">
						<div class="product-box shadow p-3 mb-5 bg-body rounded">
							 <div class="product-image">
							 	<img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>" class="img-fluid">
							 </div>
							 <div class="product-description">
									 	<div class="product-name">
									 		<?php echo $row['name']?>
									 	</div>
									 	<div class="product-price">
									 		<?php echo $row['price']?>
									 	</div>
								</div>
								<div class="share-wishlist">
								<a href="wishlist.php?wishlist_id=<?php echo $row['id']?>"><button type="button" class="btn btn-primary share-wishlist-btn">Remove</button></a>
								</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
										
<?php require('footer.php')?>        