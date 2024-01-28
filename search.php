<?php 
require('top.php');
$str=mysqli_real_escape_string($con,$_GET['str']);
if($str!=''){
	$get_product=get_product($con,'','','',$str);
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}										
?>
<div class="body__overlay"></div>
        
        <!-- Start Bradcaump area -->
        <div class="row row-container ">
			<div class="col-md-2 col-lg-2 col-sm-12">
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
			
			<?php if(count($get_product)>0){?>
			<div class="col-md-10 col-lg-10 col-sm-12">
				<div class="row product-container">
						<?php
							foreach($get_product as $list){
						?>
						<div class="col-md-3 col-lg-3 col-sm-12">
								<div class="product-box shadow p-3 mb-5 bg-body rounded">
									 <div class="product-image">
										<a href="product.php?id=<?php echo $list['id']?>">
											<img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
										</a>
									 </div>
									 <div class="product-description">
										<div class="product-name">
											<h4><a href="product-details.html"><?php echo $list['name']?></a></h4>
										</div>
										<div class="buy-product">
											
											<a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id']?>','add')"><i class="fas fa-shopping-cart"></i></a>
											
											<a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')"><i class="fas fa-heart"></i></a>
											
											<a href="#"><i class="fas fa-eye"></i></a>
											
										</div>
										<div class="product-price">
											<p>	&#8377;<?php echo $list['price']?></p>
										</div>
									 </div>
								</div>
						</div>
				<?php } ?>
				</div>
			</div>
			<?php }
			else { 
					echo "Data not found";
				 } ?>
</div>	
        <!-- End Product Grid -->
        <!-- End Banner Area -->
		<input type="hidden" id="qty" value="1"/>
<?php require('footer.php')?>        