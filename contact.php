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
		<div class="c-title">
		<h1>Keep in touch</h1>
		</div>
        <!-- Start Contact Area -->
		<div class="contact-info">
		<div class="wrapper contact-container">
			<div class="contact-cols">
				<div class="contact-logo">
				<i class="fas fa-phone"></i>
				</div>
				<div class="contact-no">
				 <a href="#">+91 72268142004 | +91 9173888080</a>
				</div>
			</div>
			<div class="contact-cols">
				<div class="contact-logo">

				<i class="fas fa-map-marker-alt"></i>
				</div>
				<div class="contact-no">
				 <a href="#">Loni Road, Shahdara New Delhi 110032</a>
				</div>
			</div>
			<div class="contact-cols">
				<div class="contact-logo">
				<i class="fas fa-envelope"></i>
				</div>
				<div class="contact-no">
				 <a href="#">divymakani881@gmail.com</a>
				</div>
			</div>
		</div>
		</div>
        <!-- End Contact Area -->
		<!-- Google Map  -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29279.542729206023!2d73.28294100600995!3d23.462526190271827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395df035d5c6cd93%3A0x7d103770120ac3ff!2sModasa%20Bus%20Station!5e0!3m2!1sen!2sin!4v1631422211051!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		<!-- Google Map ends -->
				<div class="form-container">
		<div class="form-box">
			<div class="form-title">
			Get in touch
			</div>
			
			<form action="#" method="POST">
			<div class="row">
			<div class="form-cols">
			<input type="text" class="name" name="name"  id="name" placeholder="Name *" required>
			</div>
			<div class="form-cols">
			<input type="email" class="name" name="email" id="email" placeholder="Email *" required>
			</div>
			</div>
			<div class="row">
			<div class="form-cols">
			<input type="text" class="name" name="mobile" id="mobile" placeholder="Mobile *" required>
			</div>
			<div class="form-cols">
			<input type="text" class="name" name="subject" id="message" placeholder="Subject *">
			</div>
			</div>
			<div class="row">
				<div class="submit-btn">
					<!-- Button trigger modal -->
					<button type="button" onclick="send_message()" class="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">
					Submit
					</button> 

				</div>
			</div>
			</form>
		</div>
		</div>
<?php require('footer.php')?>        