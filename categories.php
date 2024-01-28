<?php 
require('top.php');

if(!isset($_GET['id']) && $_GET['id']!=''){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}

$cat_id=mysqli_real_escape_string($con,$_GET['id']);

$price_high_selected="";
$price_low_selected="";
$new_selected="";
$old_selected="";
$sort_order="";
if(isset($_GET['sort'])){
	$sort=mysqli_real_escape_string($con,$_GET['sort']);
	if($sort=="price_high"){
		$sort_order=" order by product.price desc ";
		$price_high_selected="selected";	
	}if($sort=="price_low"){
		$sort_order=" order by product.price asc ";
		$price_low_selected="selected";
	}if($sort=="new"){
		$sort_order=" order by product.id desc ";
		$new_selected="selected";
	}if($sort=="old"){
		$sort_order=" order by product.id asc ";
		$old_selected="selected";
	}

}

if($cat_id>0){
	$get_product=get_product($con,'',$cat_id,'','',$sort_order);
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
        <!-- Start Product Grid -->
        <div class="row row-container ">
			<div class="col-md-2 col-lg-2 col-sm-12">
				<div class="list-group">
				  <h5 class="list-group-item active cat-title">
					Categories</h5>
				 <?php
					foreach($cat_arr as $list){
						?>
						<a class="list-group-item" href="categories.php?id=<?php echo $list['id']?>"><?php echo $list['categories']?></a>
						<?php
					}
					?>
				</div>
				
				<div class="list-group filter-container">
				 	 <h5 class="list-group-item cat-title" aria-current="true"><i class="fas fa-filter"></i>Filters</h5>
					 <select class="ht__select" onchange="sort_product_drop('<?php echo $cat_id?>','<?php echo SITE_PATH?>')" id="sort_product_id">
						<option value="">Default softing</option>
						<option value="price_low" <?php echo $price_low_selected?>>Sort by price low to hight</option>
						<option value="price_high" <?php echo $price_high_selected?>>Sort by price high to low</option>
						<option value="new" <?php echo $new_selected?>>Sort by new arrival</option>
						
						<option value="old" <?php echo $old_selected?>>Sort by old ones</option>
					</select>
				</div>
				
			</div>
			
			<?php if(count($get_product)>0){?>
			<div class="col-md-10 col-lg-10 col-sm-12">
				<div class="row product-container">
						<?php
							foreach($get_product as $list){
						?>
						<div class="col-md-3 col-lg-3 col-sm-12">
								<div class="product-box shadow p-3 mb-5 bg-body rounded" style="box-shadow: 0 0 5px rgba(0,0,0,.5) !important;">
									 <a href="product.php?id=<?php echo $list['id']?>">
									 <div class="product-image">
											<img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
									 </div>
									 <div class="product-description">
										<div class="product-name">
											<h4><?php echo $list['name']?></h4>
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
									 </a>
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