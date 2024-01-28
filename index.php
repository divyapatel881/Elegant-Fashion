<?php require('top.php')?>
<div class="body__overlay"></div>
        
        <!-- Start Slider Area -->
        <div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                   
                        <div class="row align-items__center">
                            <div class="col-md-12">
							<img src="images/banner1.jpg" />
							</div>
                        </div>
                    
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                        <div class="row align-items__center">
                           <div class="col-md-12">
							<img src="images/banner2.jpg" />
							</div>
                        </div>
                </div>
                <!-- End Single Slide -->
				<!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                        <div class="row align-items__center">
                           <div class="col-md-12">
							<img src="images/banner3.jpg" />
							</div>
                        </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- Start Slider Area -->
        <!-- Start Category Area -->
        <section class="htc__category__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">New Arrivals</h2>
                        </div>
                    </div>
                </div>
                <div class="htc__product__container">
                    <div class="row">
                        <div class="">
							<?php
							$get_product=get_product($con,4);
							foreach($get_product as $list){
							?>
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb na-box">
                                        <a href="product.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
										<ul class="product__action">
											<li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')"><i class="icon-heart icons"></i></a></li>
											<li><a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id']?>','add')"><i class="icon-handbag icons"></i></a></li>
										</ul>
									</div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a></h4>
                                        <ul class="fr__pro__prize">
                                            
                                            <li><?php echo $list['price']?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Category Area -->
		<div class="row">
			<div class="col-md-12">
				<div class="ad">
					<div class="ad-image">
						<img src="images/ad.jpg">
							<div class="ad-des">
								<h1>Get 30% Discount off * </h1>
								<p>In Your First Three Order</p>
							</div>
					</div>
				</div>
				<div class="slogan-container">
					<div class="wrapper">
						<div class="slogan">
							<h1>08</h1>
							<h6>AUGUST 2021</h6>
						</div>
						<div class="slogan-title">
							<a href="#">I want people to see dress</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" id="qty" value="1"/>
<?php require('footer.php')?>        