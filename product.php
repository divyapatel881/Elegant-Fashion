<?php 
require('top.php');
if(isset($_GET['id'])){
	$product_id=mysqli_real_escape_string($con,$_GET['id']);
	if($product_id>0){
		$get_product=get_product($con,'','',$product_id);
	}else{
		?>
		<script>
		window.location.href='index.php';
		</script>
		<?php
	}
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
?>

 <!-- Start Bradcaump area -->
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
        <!-- Start Product Details Area -->
<div class="p-view-row">
    <section id="default" class="padding-top0">
   
    	<div class="wrapper p-view-container"> 
         <div class="left">
			    <div class="picZoomer imageZoom" id="img-tab-1">
					<img data-origin="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>" alt="">
				</div>
	<!--
    <ul class="piclist">
        <li><img src="images/p7.jpg" alt=""></li>
        <li><img src="images/p8.jpg" alt=""></li>
        <li><img src="images/m1.png" alt=""></li>
        <li><img src="images/w1.png" alt=""></li>
        <li><img src="images/m2.png" alt=""></li>
        <li><img src="images/m3.jpeg" alt=""></li>
    </ul>
	-->
		</div>
      <div class="right">
					<div class="p-select">
							<div class="pro-title"><h3><?php echo $get_product['0']['name']?></h3></div>
							<div class="pro-id"><small class="text-muted">T 102568</small></div>
							<div class="ratings">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
							</div>
							<div class="pro-price"><h2 class="product-title"><?php echo $get_product['0']['price']?></h2></div>
					</div>
					<div class="p-select">
						<div class="pro-size">Size</div>
						<div class="measurement">
							<a href="#">s</a>
							<a href="#">m</a>
							<a href="#">l</a>
							<a href="#">xl</a>
							<a href="#">xxl</a>
						</div>
						<div class="pro-size">QTY:
							<select id="qty">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
							</select>
						</div>
					</div>
					<div class="p-select">
						<div class="pro-qty place-order">
							<button type="button" class="btn btn-primary share-wishlist"><a href="javascript:void(0)" onclick="manage_cart('<?php echo $get_product['0']['id']?>','add')">Add to cart</a></button>
						</div>
					</div>
					<div class="p-select">
						<div class="size-fit-desc">
							<div class="pro-title product-details-title"><h5>Product-details</h5></div>
							<div class="pro-id"><small class="text-muted"><?php echo $get_product['0']['short_desc']?></small></div>
						</div>
						<div class="size-fit-desc">
							<div class="pro-title product-details-title"><h5>Size & Fit</h5></div>
							<div class="pro-id"><small class="text-muted">The model (height 5'8") is wearing a size S</small></div>
						</div>
						<div class="size-fit-desc">
							<div class="pro-title product-details-title"><h5>Material & Care</h5></div>
							<div class="pro-id"><small class="text-muted">Cotton, Hand-wash</small></div>
						</div>

						<div class="pro-title product-details-title index-row-title"><h5>Product-details</h5></div>
						<div class="index-table-container">
							<div class="index-row">
								<div class="index-row-key"><small class="text-muted">Sleeve Length</small></div>
								<div class="index-row-value">Sleeve Length</div>
							</div>
							<div class="index-row">
								<div class="index-row-key"><small class="text-muted">Size</small></div>
								<div class="index-row-value">Sleeve Length</div>
							</div>
							<div class="index-row">
								<div class="index-row-key"><small class="text-muted">Neck</small></div>
								<div class="index-row-value">Sleeve Length</div>
							</div>
							<div class="index-row">
								<div class="index-row-key"><small class="text-muted">Color-Family</small></div>
								<div class="index-row-value">Sleeve Length</div>
							</div>
						</div>
					</div>
					<div class="p-select">
						<div class="ratings">
							<div class="rating">Ratings<i class="fas fa-star"></i></div>
						</div>
						<div class="review">
								<div class="progress">
								  <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">5</div>
								</div>
								<div class="progress">
								  <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">4</div>
								</div>
								<div class="progress">
								  <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">3</div>
								</div>
								<div class="progress">
								  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">2</div>
								</div>
								<div class="progress">
								  <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
								</div>
						</div>
					</div>
					<div class="p-select">
						<div class="pro-title product-details-title"><h5>What Customers Said.</h5></div>
					</div>
	  </div>
    </div>
    </section>
    </div>
        <!-- End Product Description -->
        
										
<?php require('footer.php')?>        