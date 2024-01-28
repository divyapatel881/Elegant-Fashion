<?php 
require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
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
		<div class="row row-container ">
			<div class="col-md-3">
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
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12  table-container">
						<!--<div class="empty-order">
							<div class="text-center">
								<div class="delivery-image">
							 		 <img src="images/delivery1.png" class="rounded" alt="...">
							 		 <div class="no-order">
							 		 <p>Sorry No order yet..</p>
							 		 </div>
							 		 <div class="order-btn">
							 		 	<a href="">Shop Now</a>
							 		 </div>
								</div>
							</div>
						</div>-->
						<table class="table table-striped">
						  <tr>
						  	<th>Order Id</th>
						  	<th>Date</th>
						  	<th>Ship To</th>
						  	<th>Payment Type</th>
						  	<th>Payment Status</th>
						  	<th>Order Status</th>
						  </tr>
						  <?php
							$uid=$_SESSION['USER_ID'];
							$res=mysqli_query($con,"select `order`.*,order_status.name as order_status_str from `order`,order_status where `order`.user_id='$uid' and order_status.id=`order`.order_status");
							while($row=mysqli_fetch_assoc($res)){
							?>
						  <tr>
						  	<td><a href="my_order_details.php?id=<?php echo $row['id']?>"> <?php echo $row['id']?></a></td>
						  	<td><?php echo $row['added_on']?></td>
						  	<td><?php echo $row['address']?>,
								<?php echo $row['city']?>,
								<?php echo $row['pincode']?><br/></td>
						  	<td><?php echo $row['payment_type']?></td>
						  	<td><?php echo $row['payment_status']?></td>
						  	<td><?php echo $row['order_status_str']?></td>
						  </tr>
						   <?php } ?>
						</table>						
					</div>
				</div>
			</div>
		</div>
        						
<?php require('footer.php')?>        