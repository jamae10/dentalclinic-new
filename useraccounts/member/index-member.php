<!-- Homepage for members -->
<?php 
session_start();
include "config.php";

if(!isset($_SESSION['userlogin']) && empty($_SESSION['userlogin'])){
  header ("Location: ../index.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dr. Castillo Dental Clinic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- STYLES -->

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    
    <link href="../style/style.css" rel="stylesheet" type="text/css"/>
    
  </head>
  <style>
.slider-item{
    background-image:url(../images/girl_bg.jpg);
  }

  .slider-item2{
    background-image:url(../images/dentist_bg.jpg);
  }
@media all and (max-width: 400px) {
  .slider-item{
    background-image:url(../images/unique3.png);
  }

  .slider-item2{
    background-image:url(../images/unique4.png);
  }
}
</style>
  <body>

<!-- HEADER -->
    <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
    			<div class="col-lg-3 pr-4 align-items-center">
		    		<a class="navbar-brand" href="index-member.php">Dr. Castillo <span><br>Dental Clinic</span> </a>
	    		</div>
	    		<div class="col-lg-9 d-none d-md-block">
		    		<div class="row d-flex">
			    		<div class="col-md-4 pr-3 d-flex topper align-items-center">
			    			<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">Address: #81 (Commercial) M. Almeda Street Pateros, Metro Manila</span>
					    </div>
					    <div class="col-md pr-3 d-flex topper align-items-center">
					    	<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">Email: drcastilloDC@gmail.com</span>
					    </div>
					    <div class="col-md pr-3 d-flex topper align-items-center">
					    	<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">Phone: (02) 642-8175 / 642-1436</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </nav>
<!-- END HEADER -->

<!-- MENU -->
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

        <!-- BUTTONS -->
        <p class="button-custom order-lg-last mb-0">
        <a href="appointment.php"><button type="button" class ="btn btn-secondary"><i class="far fa-calendar-check"></i><span class="one"> Make an Appointment</span><span style="display:none" class="two"> Book</span></button></a>
        <a href="account.php"><button type="button" class ="btn btn-danger"><i class="fas fa-user"></i> My Account </button></a>
        <button type="button" class ="btn btn-danger2"><i class="fas fa-sign-out-alt"></i> Logout </button>
	      </p>
        <!-- END BUTTONS -->

 <!-- MENU -->
 <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="index-member.php" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="about-member.php" class="nav-link">About Us</a></li>
	        	<li class="nav-item"><a href="services-member.php" class="nav-link">Services</a></li>
	          	<li class="nav-item"><a href="contact-member.php" class="nav-link">Contact Us</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
<!-- END MENU -->

<!-- CAROUSEL -->
<section class="home-slider owl-carousel">
    <div class="slider-item" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 text ftco-animate">
            <div class = "box">
            <h1 class="mb-4">Dental Care<span>Now Available Online.</span></h1>
            <h3 class="subheading">Accommodate Your Dental Health Needs Anywhere With Our Best Dentists.</h3>
</div>
          </div>
        </div>
        </div>
      </div>
      </div>

      <div class="slider-item2" >
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 text ftco-animate">
          <div class = "box">
            <h1 class="mb-4">Diagnostic Dental<span>Services</span></h1>
            <h3 class="subheading">Your Health is Our Top Priority. Experience Quality Dental Care In Our Clinic.</h3>
          </div>
        </div>
  </div>
        </div>
      </div>
    </section>
<!-- END CAROUSEL -->


<!-- 4 boxes-->
<section class="ftco-services ftco-no-pb">
		<div class="container container-danger">
			<div class="row no-gutters">

          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-doctor"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Qualified Dentists</h3>
                <p>Only the best dentists, to bring you the best care. We educate our patients about Dental health Importance.</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-ambulance"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Emergency Care</h3>
                <p>We are one phone call away for all dental emergencies, with our dentists ready to assist as soon as possible.</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-stethoscope"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Outdoor Checkup</h3>
                <p>We ensure safe dental visits in our clinic, where we provide health protocols for all of our patients.</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-24-hours"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Online Consults</h3>
                <p>Experience 24 hours service from our team with our online consultations and convenient support system.</p>
              </div>
            </div>
          </div>

        	</div>
		</div>
	</section>
<!-- 4 boxes -->

<!-- SERVICES -->
    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-4">Our Services</h2>
            <p>Our well-vetted Castillo Doctors' expertise is to provide you and your loved ones with expert primary dental care. Here are what we offer in this clinic. </p>
          </div>
        </div>
    		<div class="row">

    		<!-- GENERAL DENTISTRY -->
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">General Dentistry</h3>
                <img src="../images/service-1.jpg" alt="General Dentistry" class="image1">
	        			<p><span class="price">₱499</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Teeth Cleaning</li>
								<li>Painless Ultrasonic</li>
								<li>Root planning </li>
								<li>Dental Restoration</li>
								<li>Endodontics</li>
        			</ul>
        			<p class="button text-center"><a href="appointment.php" class="btn btn-primary px-4 py-3">Book Now</a></p>
        		</div>
        	</div>
        	<!-- END GENERAL DENTISTRY -->

        	<!-- ORTHODONTICS -->
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Orthodontics</h3>
                <img src="../images/pic-1.jpg" alt="Orthodontics" class="image1">
	        			<p><span class="price">₱999</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Orthodontic Braces</li>
								<li>Metal Braces</li>
								<li>Invisalign</li>
								<li>Sapphire Clear Braces</li>
								<li>Brace Cleaning</li>
        			</ul>
        			<p class="button text-center"><a href="appointment.php" class="btn btn-primary px-4 py-3">Book Now</a></p>
        		</div>
        	</div>
        	<!-- END ORTHODONTICS -->

        	<!-- COSMETICS DENTISTRY -->
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry active pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Cosmetic Dentistry</h3>
                <img src="../images/pic-2.jpg" alt="Cosmetic Dentistry" class="image1">
	        			<p><span class="price">₱1199</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Dental Veneers</li>
								<li>Teeth Whitening</li>
                <li>Inlays and Onlays</li>
								<li>Composite Veneers</li>
								<li>Cosmetic Bonding</li>
        			</ul>
        			<p class="button text-center"><a href="appointment.php" class="btn btn-primary px-4 py-3">Book Now</a></p>
        		</div>
        	</div>
        	<!-- END COSMETICS DENTISTRY -->

        	<!-- DENTAL IMPLANT -->
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Dental Implant</h3>
                <img src="../images/pic-3.jpg" alt="Dental Implant" class="image1">
                <p id="rcorners3"></p>
	        			<p><span class="price">₱1249</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Dentures</li>
								<li>Dental Crown</li>
								<li>Teeth Shaping</li>
								<li>Coatings</li>
								<li>Gingivoplasty </li>
        			</ul>
        			<p class="button text-center"><a href="appointment.php" class="btn btn-primary px-4 py-3">Book Now</a></p>
        		</div>
        	</div>
        	<!-- END DENTAL IMPLANT -->
        </div>
    	</div>
    </section>
<!-- END SERVICES -->

<!-- FOOTER -->
<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">

          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 logo">Dr. Castillo <span>Dental Clinic</span></h2>
              <p>Our technology offers you a convenient access to a Dentist, and world-class data security. Experience high-end medical care only with Castillo Dental Clinic.</p>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">#81 (Commercial) M. Almeda Street Pateros, Metro Manila</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">(02) 642-8175 / 642-1436</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">dentalclinic.castillo@gmail.com</span></a></li>
	              </ul>
	            </div>
	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="index-member.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="about-member.php"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="services-member.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="contact-member.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="services-member.php"><span class="ion-ios-arrow-round-forward mr-2"></span>General Dentistry</a></li>
                <li><a href="services-member.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Orthodontics</a></li>
                <li><a href="services-member.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Cosmetics Dentistry</a></li>
                <li><a href="services-member.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Dental Implant</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
          	<div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Opening Hours</h2>
              <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>24/7 (Online Consultation)</h3>
            	<h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>9:00 AM - 12:00 PM (Appointment)</h3>
              <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>9:00 AM - 1:00 PM (X-ray Services)</h3>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">BCSAD</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
<!-- END FOOTER -->


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Are you sure to log  out? -->

  <script>

document.querySelector('.btn-danger2').addEventListener('click', danger);

function danger() {
  swal(
    {
      title: "Are you sure to log out?",
      text: "We still have many services to offer!",
      icon: '../images/question-mark.png',
      imageSize: '100x100',
      buttons: ["Cancel", "Log out"],
})
.then((okay) => {
   if (okay) {
    window.location.href = "logout.php";}
    }
  );
}
</script>

  </body>
</html>
