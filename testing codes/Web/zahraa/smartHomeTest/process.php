<!DOCTYPE html>
<html>
	<head>
		<title>Process</title>
    <?php include_once "views/html_header.php"; ?>

	</head>
	<body>
	   <!-- start navbar -->
  <?php
  include_once "views/navbar.php";
  ?>
  <!-- end navbar -->


    <!-- Start Carousel Section -->
    <section class="carousel" id="home">
		<div class="container-fluid">

	    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>

			  <div class="carousel-inner">
			  	<!-- Start Carousel Items -->
			    <div class="carousel-item active">
			      <img class="d-block w-100 " src="resources/images/slider/c1.jpg" alt="First slide" style="width: 1300px ; height: 500px;" >
			      <div class="carousel-caption d-none d-md-block">
  				    
				    </div> 
		      </div>
			    <div class="carousel-item">
			      <img class="d-block w-100 " src="resources/images/slider/c4.jpg" alt="Second slide" style="width: 1300px ; height: 500px;">
		      <div class="carousel-caption d-none d-md-block ">
				      <div class="row ">
                <div class="col-xl-9 mx-auto slide2">
                  <h1 >MAKE YOUR HOME THE SMARTEST ON THE BLOCK</h1>
                  <p>PERSONALIZE YOUR HOME TO BE MORE COMFORTABLE, CONVENIENT, AND SECURE.</p>
                </div> 
              </div>
				  </div>
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100 " src="resources/images/slider/c3.jpg" alt="Third slide" style="width: 1300px ; height: 500px;">
			      <div class="carousel-caption d-none d-md-block">
				      
				    </div>
			    </div>
			    <!-- End Carousel Items -->

			    <!-- Start Process Page -->
			    <section class="process">
			    	<div class="container">
			    		<h1>Process</h1>
			    		<hr>
			    		<div class="row sequence">
			    			<div class="col-4">
			    				<img src="resources/images/process/design.jpg">
			    			</div>
			    			<div class="col-8">
			    				<h3>DESIGN &amp; DOCUMENTATION</h3>
			    				<p>
			    					Effective systems integration require careful planning, layout, and design. We offer advanced system design services. From automation control of various subsystems to fully themed home theaters, we are here to design and execute your systems just the way you envision them to be.
			    				</p>
			    				<p>
			    					You're already investing much of your time and money into your project. So, why not take the step to have your project professionally designed ensuring you not only have a good system but you have "your" system
			    				</p>
			    				<p>
			    					There are many elements to a professionally designed system. Many of these are performed behind the scenes. Though sometimes not visible, each and every part of the system design is important to the quality and success of the final project.
			    				</p>
			    			</div>
			    		</div>


			    		<div class="row sequence">
			    			<div class="col-4">
			    				<img src="resources/images/process/pm.jpg">
			    			</div>
			    			<div class="col-8">
			    				<h3>PROJECT MANAGEMENT </h3>
			    				<p>
			    					Project Management is a critical but often overlooked service in many projects. Not so at our company. Every project is assigned a project manager. Our project managers plan and coordinate each phase of the project and interface between all parties, from the builder to the supply house to the customer. They also ensure that outstanding attention to detail is followed on each and every project, no matter the size.
			    				</p>
			    			</div>
			    		</div>


			    		<div class="row sequence">
			    			<div class="col-4">
			    				<img src="resources/images/process/programming.jpg">
			    			</div>
			    			<div class="col-8">
			    				<h3>PROGRAMMING</h3>
			    				<p>
			    					A product’s user interface bridges the gap between technology and user. Even the best quality system and equipment has little value if the customer finds it difficult or frustrating to use. For this reason, our team of in-house programmers work extensively with each project’s designer and client to ensure a quality product. This approach ensures that the user interface is consistent with the design intent from the beginning, and that the result meet the customer’s expectations.
			    				</p>
			    			</div>
			    		</div>


			    		<div class="row sequence">
			    			<div class="col-4">
			    				<img src="resources/images/process/customerservice.jpg">
			    			</div>
			    			<div class="col-8">
			    				<h3>CUSTOMER SUPPORT</h3>
			    				<p>
			    					We are all about long term client relationships and providing exceptional support for its products and services. With each new project we enter into a relationship that typically lasts many years. Our extended maintenance programs provide ongoing and preventative maintenance, system upgrades, and consultation on new innovations. Combined, these services serve to ensure that each customer’s system continues to function reliably and all the benefits can be enjoyed to the fullest.
			    				</p>
			    			</div>
			    		</div>

			    	</div>
			    </section>
			    <!-- End Process Page -->

	<!-- Start Footer -->
	<div class="content">
</div>
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo">
                    	<a href="#"> 
                		  <img src="resources/images/logo1.png" alt="Logo" style="width:55px;">
				          <span>.</span>
				          <i class="fa fa-home fa-lg" style="color: #E3E3E3"></i>
				          <span>.</span>    
				          <img src="resources/images/logo1.png" alt="Logo" style="width:55px;">
                     	</a>
                    </h2>
                </div>
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="process.php">Process</a></li>
                        <li><a href="services.php">Services</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="aboutus.php">Company Information</a></li>
                        <li><a href="contactus.php">Contact us</a></li>
                        <li><a href="#newsteller">Newsteller</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">Hotline</a></li>
                        <li><a href="#">Online Payment</a></li>
                        <li><a href="#">User Manual</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <a href="contact.php">
                      <button type="button" class="btn btn-default">Contact us</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright - CSE Web Team </p>
        </div>
    </footer>
	<!-- End Footer -->


	<!--Required Scripting Libraries -->
<!-- <script src="script/smooth-scroll.min.js"></script> -->
<script src="resources/js/jquery-3.3.1.min.js"></script>
<script src="resources/js/bootstrap.min.js"></script>
<script src="resources/js/script.js"></script>

	</body>
</html>