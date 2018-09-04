<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Dicka's Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bouquet Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php echo e(asset('assets/profile/css/bootstrap.css')); ?>" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo e(asset('assets/profile/css/style.css')); ?>" type="text/css" rel="stylesheet" media="all">  
<link href="<?php echo e(asset('assets/profile/css/font-awesome.css')); ?>" rel="stylesheet">   <!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo e(asset('assets/profile/css/swipebox.css')); ?>"> 
<link rel="icon" href="<?php echo e(asset('assets/profile/images/favicon.ico')); ?>" type="image/x-icon">
<!-- //Custom Theme files -->   
<!-- js -->
<script src="<?php echo e(asset('assets/profile/js/jquery-2.2.3.min.js')); ?>"></script> 
<!-- //js -->
<script src="<?php echo e(asset('assets/profile/js/scrollreveal.js')); ?>" ></script>
<script>
      window.sr = ScrollReveal();
</script>
<!-- web-fonts -->    
<!-- //web-fonts -->  
</head>
<body>
	<!-- banner start here -->
	<div id="home" class="banner">
		<div class="agileinfo-main">
			<div class="slider">
				<script src="<?php echo e(asset('assets/profile/js/responsiveslides.min.js')); ?>"></script>
				<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 1
					  $("#slider1").responsiveSlides({
						 auto: true,
						 nav: true,
						 speed: 500,
						 namespace: "callbacks",
					  });
					});
				</script>
				<ul class="rslides" id="slider1">
					<li> 
						<div class="banner-w3lstext">
							<h3>Quick Learner, Hardworker, Honest, </h3>
						</div>	
					</li>
					<li> 
						<div class="banner-w3lstext">
							<h3>Discipline and Motivated Individual. </h3>
						</div>	
					</li>
					<li>	
						<div class="banner-w3lstext">
							<h3>Always want to learn something new. </h3>
						</div>	
					</li>
					<li>	
						<div class="banner-w3lstext">
							<h3>Also can work individually or group. </h3>
						</div>	
					</li>
				</ul>
			</div>	
			<div class="agileinfo-header">
				<div class="container">
					<div class="agile-logo">
						<h2><a href="index.html"><img src="<?php echo e(asset('assets/profile/images/logo.png')); ?>" class="img-responsive" alt=""/> Dicka's</a></h2>
					</div>
					<div class="agileits-w3layouts-icons">
						<div class="social-icon w3-agile">
							<a href="www.twitter.com/dickait" class="social-button twitter"><i class="fa fa-twitter"></i></a>
							<a href="www.facebook.com/dickaariptianr" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
							<a href="www.steamcommunity.com/id/dickait" class="social-button dribbble"><i class="fa fa-steam"></i></a> 
						</div> 
					</div>
					<div class="clearfix"> </div>
				</div>	    
			</div>
			<!-- navigation start here -->
			<div class="top-nav">
				<a href="#home" class="scroll"><span class="menu">Menu</span></a>	
				<ul class="w3l" id="menu">
					<li><a class="active" href="#home"><span>Home</span></a></li>
					<li><a href="#about" class="scroll"><span>Profile</span></a></li>
					<li><a href="#news" class="scroll"><span>Education</span></a></li> 
					<li><a href="#skills" class="scroll"><span>Skills</span></a></li>
					<li><a href="#courses" class="scroll"><span>Courses</span></a></li>
					<li><a href="#project" class="scroll"><span>Project Exp.</span></a></li>
					<li><a href="#portfolio" class="scroll"><span>Portfolio</span></a></li>
					<li><a href="<?php echo e(url('/data')); ?>"><span>Data</span></a></li>
					<li><a href="#built" class="scroll"><span>Built</span></a></li>
					<li><a href="#contact" class="scroll"><span>Contact</span></a></li>
				</ul>
				
				
				<!-- script-for-menu -->
				<script>
				   $( "span.menu" ).click(function() {
					 $( "ul.w3l" ).slideToggle( 300, function() { 
					 // Animation complete.
					  });
					 });
				</script>
				<!-- //script-for-menu -->
			</div><!-- //navigation end here -->	
		</div>
	</div> 
	<!-- //banner end here -->
	<!-- about -->
	<div id="about" class="about w3-agile">
		<div class="container">
			<div class="about-agileinfo-row">
				<div id="about1" class="col-md-4 col-sm-4 about-w3grids about-w3right">
					<h3 class="agileits-title"> Profile</h3> 
					<h6>Dicka Ariptian Rahayu </h6>
					<ul>
                        <li class="fa fa-creative-commons margin-r-5"><b> Nickname: Dika</b></li><br>
                        <li class="fa fa-birthday-cake margin-r-5"><b> Birth: Bogor, August 17th, 1995</b></li><br>
                        <li class="fa fa-mars margin-r-5"><b> Gender: Male</b></li><br>
                        <li class="fa fa-heart margin-r-5"><b> Religion: Islam</b></li><br>
                        <li class="fa fa-institution margin-r-5"><b> Nationality: Indonesia</b></li><br>
                        <li class="fa fa-soccer-ball-o margin-r-5"><b> Status: Single</b></li>
                        <li class="fa fa-map-o margin-r-5"><b> Address: Jl. Jabaru 3 No 11 RT 2/10, Pasir Kuda, Bogor Barat. 16119.</b></li>
                     </ul>
				</div>
				<div id="about2" class="col-md-4 col-sm-4 about-w3grids about-w3limg">
					<img src="<?php echo e(asset('assets/profile/images/bascok.jpg')); ?>" class="img-responsive" alt=""/>	 
				</div>
				<div id="about3" class="col-md-4 col-sm-4 about-w3grids about-w3right">
					<h3 class="agileits-title">Abilities </h3>
					<div class="bar_group">
						<div class='bar_group__bar thin' label='Problem Solving' value='80'></div>
						<div class='bar_group__bar thin' label='Logic' value='80'></div>
						<div class='bar_group__bar thin' label='Teamwork' value='75'></div>
						<div class='bar_group__bar thin' label='Communication' value='70'></div>
						<div class='bar_group__bar thin' label='Bahasa' value='100'></div>
					</div>
					<script src="<?php echo e(asset('assets/profile/js/bars.js')); ?>"></script> 
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> 
	<!-- //about -->
	<!-- news -->
	<div id="news" class="news">
		<!-- container -->
		<div class="container">
			<h3 class="agileits-title">Education</h3> 
			<div class="news-wthreegrid"> 
				<div class="news-grid-left">
					<div id="thnSD" class="col-md-4 col-xs-4 date">
						<h5>2001 - 2007</h5> 
					</div>
					<div id="SD" class="col-md-8 col-xs-8 date-info">
						<h5><a href="#" data-toggle="modal">SD Negeri Cibalagung 3 Bogor</a></h5>
						<p></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="news-grid-left">
					<div id="thnSMP" class="col-md-4 col-xs-4 date">
						<h5>2007 - 2010</h5> 
					</div>
					<div id="SMP" class="col-md-8 col-xs-8 date-info">
						<h5><a href="#" data-toggle="modal">SMP Negeri 9 Bogor</a></h5>
						<p></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="news-grid-left">
					<div id="thnSMA" class="col-md-4 col-xs-4 date">
						<h5>2010 - 2013</h5> 
					</div>
					<div id="SMA" class="col-md-8 col-xs-8 date-info">
						<h5><a href="#" data-toggle="modal">SMA Negeri 9 Bogor</a></h5>
						<p></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="news-grid-left">
					<div id="thnPT" class="col-md-4 col-xs-4 date">
						<h5>2013 - 2017</h5> 
					</div>
					<div id="PT" class="col-md-8 col-xs-8 date-info">
						<h5><a href="#" data-toggle="modal">Universitas Gunadarma</a></h5>
						<p>GPA 3.48 <br>Programmer Laboratorium Manajemen Dasar, Universitas Gunadarma <br><i class="fa fa-clock"></i>2015 - 2017</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //news -->
	<!-- table-book -->
	<div class="table-book" id="skills">
		<div class="container">
			<div class="book-info agile-rowinfo">
				<div class="box box-solid">
		            <div id="skill-bar" class="col-md-6">
			            <div class="box-body">
			              <div class="progress">
			                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
			                  <span class="progress-bar-text">HTML, CSS and JavaScript</span>
			                </div>
			              </div>
			              <div class="progress">
			                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
			                  <span class="progress-bar-text">PHP/LARAVEL</span>
			                </div>
			              </div>
			              <div class="progress">
			                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
			                  <span class="progress-bar-text">MICROCONTROLLER</span>
			                </div>
			              </div>
			               <div class="progress">
			                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
			                  <span class="progress-bar-text">ADOBE PHOTOSHOP</span>
			                </div>
			              </div>
			               <div class="progress">
			                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
			                  <span class="progress-bar-text">DATABASE</span>
			                </div>
			              </div>
			              <div class="progress">
			                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
			                  <span class="progress-bar-text">MICROSOFT OFFICE</span>
			                </div>
			              </div>
			            </div>
			        </div>
			        <div id="skill" class="col-md-6">
			        	<h1 class="textCol">Skills</h1>	
			        </div>
			    </div>
				<div class="clearfix"> </div>
			</div> 
		</div>
	</div>
	<!-- //table-book -->
	<!-- services -->
	<div id="courses" class="services">
		<div class="container">  
			<h3 class="agileits-title">Courses and Workshop</h3> 
			<div id="kursus" class="services-w3ls-row agileits-w3layouts">
				<div class="col-md-12 col-sm-12 col-xs-6 services-grid agileits-w3layouts">
					<h5><i class="fa fa-wifi"></i> INTRODUCTION TO WIRELESS LAN INSTALLATION</h5>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-6 services-grid agileits-w3layouts">
					<h5><i class="fa fa-line-chart"></i> ADEMPIERE FOR BEGINNER</h5>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-6 services-grid agileits-w3layouts">
					<h5><i class="fa fa-pie-chart"></i> ADEMPIERE FOR INTERMEDIATE</h5>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div id="kursus" class="services-w3ls-row agileits-w3layouts">
				<div class="col-md-12 col-sm-12 col-xs-6 services-grid agileits-w3layouts">
					<h5><i class="fa fa-linux"></i> LINUX SYSTEM ADMINISTRATION FOR BEGINNER</h5>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-6 services-grid agileits-w3layouts">
					<h5><i class="fa fa-server"></i> INTERMEDIATE LINUX SERVER ADMINISTRATION</h5>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-6 services-grid agileits-w3layouts">
					<h5><i class="fa fa-reorder "></i> XML PROGRAMMING LANGUAGE</h5>
				</div>
				<div class="clearfix"> </div>
			</div>   
		</div>
	</div>
	<!-- //services -->
	<!-- team -->
	<div class="team" id="project">
		<div class="container"> 
			<h3 class="agileits-title">Project Experience</h3> 
			<div id="project-left" class="team-agileinfo agileits-w3layouts">
				<div class="col-md-6 team-grid w3-agileits">
					<div class="team-grid-right">
						<img src="<?php echo e(asset('assets/profile/images/EC-HEAD.png')); ?>" alt=" " class="img-responsive" />
					</div>
					<div class="team-grid-left">
						<h4>EC-MATH Android Application</h4>
						<p>This app built by Ionic Framework that using hybrid technology. 
						Ionic framework using HTML, CSS and JavaScript to build an app</p>
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 team-grid w3-agileits">
					<div class="team-grid-right aliquam">
						<img src="<?php echo e(asset('assets/profile/images/VTS-HEAD-2.png')); ?>" alt=" " class="img-responsive" />
					</div>
					<div class="team-grid-left non">
						<h4>Android Application - Vehicle Tracking System </h4>
						<p>This app built by Ionic Framework to track the position of 
						the vehicle that has been installed the tracking device</p>
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div id="project-right" class="team-agileinfo">
				<div class="col-md-6 team-grid w3-agileits">
					<div class="team-grid-right">
						<img src="<?php echo e(asset('assets/profile/images/web-profile2.png')); ?>" alt=" " class="img-responsive" />
					</div>
					<div class="team-grid-left">
						<h4>www.dickaariptian.xyz</h4>
						<p>My own website. </p>
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 team-grid w3-agileits">
					<div class="team-grid-right aliquam">
						<img src="<?php echo e(asset('assets/profile/images/alat-pelacak-hand2.png')); ?>" alt=" " class="img-responsive" />
					</div>
					<div class="team-grid-left non">
						<h4>Microcontroller - Vehicle Tracking System</h4>
						<p>This tool built by Microcontroller Arduino Uno and SIM808
						Module to receive and send the coordinates position of the vehicle 
						that has been installed this tool</p>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- portfolio -->
	<div id="portfolio" class="services portfolio">
		<div class="container">   
			<h3 class="agileits-title">Portfolio</h3>  
			<div class="gallery_gds">
				<ul id="list-port" class="simplefilter">
					<li class="active" data-filter="all">All</li>
					<li data-filter="1">EC-MATH ANDROID APPLICATION</li>
					<li data-filter="2">ANDROID APPLICATION - VEHICLE TRACKING SYSTEM</li>
					<li data-filter="3">MICROCONTROLLER - VEHICLE TRACKING SYSTEM</li>
					<li data-filter="4">MY OWN WEBSITE</li>
				</ul>
				<div id="foto-port" class="filtr-container">
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="1" data-sort="Busy streets">
						<div class="agileits-img">
							<a href="images/EC-HEAD.png" class="swipebox" title="">
								<img class="img-responsive " src="<?php echo e(asset('assets/profile/images/EC-HEAD.png')); ?>" alt=""  /> 
								<div class="wthree-pcatn">
									<h4>EC-MATH</h4>  
								</div> 
							</a> 
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="2" data-sort="Luminous night">
						<div class="agileits-img">
							<a href="images/MENU-POSISI.png" class="swipebox" title="">
								<img src=src="<?php echo e(asset('assets/profile/images/menu-posisi.png')); ?>" alt="" class="img-responsive" />
								<div class="wthree-pcatn">
									<h4>ANDROID APP - VTS</h4>  
								</div> 
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="1" data-sort="City wonders">
						<div class="agileits-img">
							<a href="images/EC-LOGO-H.jpg" class="swipebox" title="">
								<img src="<?php echo e(asset('assets/profile/images/EC-LOGO-H.jpg')); ?>" alt="" class="img-responsive" />
								<div class="wthree-pcatn">
									<h4>EC-MATH</h4>  
								</div> 
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="3" data-sort="Industrial site">
						<div class="agileits-img">
							<a href="images/alat-pelacak-hand2.png" class="swipebox" title="">
								<img src="<?php echo e(asset('assets/profile/images/alat-pelacak-hand2.png')); ?>" alt="" class="img-responsive " />
								<div class="wthree-pcatn">
									<h4>Alat Pelacak</h4>  
								</div> 
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="3" data-sort="In production">
						<div class="agileits-img">
							<a href="images/alat-pelacak.png" class="swipebox" title="">
								<img src="<?php echo e(asset('assets/profile/images/alat-pelacak.png')); ?>" alt="" class="img-responsive" />
								<div class="wthree-pcatn">
									<h4>Alat Pelacak</h4>  
								</div> 
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="2" data-sort="Peaceful lake">
						<div class="agileits-img">
							<a href="images/VTS-HEAD-2.png" class="swipebox" title="">
								<img src="<?php echo e(asset('assets/profile/images/VTS-HEAD-2.png')); ?>" alt="" class="img-responsive" />
								<div class="wthree-pcatn">
									<h4>ANDROID APP - VTS</h4>  
								</div> 
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="1" data-sort="Peaceful lake">
						<div class="agileits-img">
							<a href="images/EC-side.png" class="swipebox" title="">
								<img src="<?php echo e(asset('assets/profile/images/EC-side.png')); ?>" alt="" class="img-responsive" />
								<div class="wthree-pcatn">
									<h4>EC-MATH</h4>  
								</div> 
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="2" data-sort="Peaceful lake">
						<div class="agileits-img">
							<a href="images/VTS-HEAD-2.png" class="swipebox" title="">
								<img src="<?php echo e(asset('assets/profile/images/VTS-HEAD-2.png')); ?>" alt="" class="img-responsive" />
								<div class="wthree-pcatn">
									<h4>ANDROID APP - VTS</h4>  
								</div> 
							</a>	
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="3" data-sort="Peaceful lake">
						<div class="agileits-img">
							<a href="<?php echo e(asset('assets/profile/images/web-profile2.png')); ?>" class="swipebox" title="Ac lobortis justo rutrum quis. Praesent non purus fermentum, duis maximus tortor diam, eleifend velit non">
								<img src="<?php echo e(asset('assets/profile/images/web-profile2.png')); ?>" alt="" class="img-responsive"/>
								<div class="wthree-pcatn">
									<h4>MY OWN WEBSITE</h4>  
								</div> 
							</a>	
						</div>
					</div>
				   <div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //portfolio --> 
	
	<!-- modal-about -->
	<!-- <div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body modal-spa">
					<img src="images/g2.jpg" class="img-responsive" alt=""/>
					<h4>Consectetur adipiscing elit</h4>
					<p>Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate in.<br> Fusce lacus purus, pulvinar ut lacinia id, sagittis eu mi. Vestibulum eleifend massa sem, eget dapibus turpis efficitur at. Aliquam viverra quis leo et efficitur. Nullam arcu risus, scelerisque quis interdum eget, fermentum viverra turpis. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut At vero eos </p>
				</div> 
			</div>
		</div>
	</div> -->
	<!-- //modal-about -->    
	<!-- contact -->
	<div id="built" class="map">
		
		<!-- <iframe src="https://www.google.co.id/maps/place/Jl.+Jabaru+3+No.12,+Pasirkuda,+Bogor+Bar.,+Kota+Bogor,+Jawa+Barat+16119/@-6.6044953,106.7784547,19z/data=!3m1!4b1!4m5!3m4!1s0x2e69c5a3a2ba49e7:0x16fd94f5e4c1f467!8m2!3d-6.6044942!4d106.7788155?hl=en"></iframe> -->
	</div>
	<div class="contact" id="contact">
		<div class="container">
			<h3 class="agileits-title">Contact</h3>   
			<div class="contact-info">	
				<div class="col-md-4 contact-grids">
					<div class="cnt-address">
						<h5 class="w3ls-title1">Address</h5> 
						<p>Jl. Jabaru 3 
							<span>No 11 RT 2/10</span>
							 Pasir Kuda, Bogor Barat. 16119.
						</p> 
						<p>Telephone: 0895-0953-9507 <br>
							E-mail: <a href="#">dickaariptian@gmail.com</a>
						</p>
					</div>
				</div>
				<div class="col-md-8 contact-grids contact-grids-w3right">
					<h5></h5>
					<div class="contact-form">  
						<form action="#" method="post">
							<textarea name="Message" placeholder="Message" required=""></textarea>
							<input type="text" name="First Name" placeholder="Name" required="">
							<input type="email" name="Email" placeholder="Email" required=""> 
							<input type="submit" value="SUBMIT">
						</form> 
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> 
	<!-- //contact --> 
	<!-- footer start here --> 
	<div class="footer-agile">
		<div class="container">
			<div class="footer-top-agileinfo"> 
				<div class="col-md-3 col-sm-4 footer-wthree-grid">  
					<div class="agile-logo footer-w3logo">
						<h2><a href="#"><img src="<?php echo e(asset('assets/profile/images/logo.png')); ?>" alt=""/> Dicka's</a></h2>
					</div>
				</div> 
				<div class="col-md-9 col-sm-8 footer-wthree-grid"> 
					<ul class="w3l">
					<li><a class="active" href="#"><span>Home</span></a></li>
					<li><a href="#about" class="scroll"><span>Profile</span></a></li>
					<li><a href="#news" class="scroll"><span>Education</span></a></li> 
					<li><a href="#skills" class="scroll"><span>Skills</span></a></li>
					<li><a href="#courses" class="scroll"><span>Courses</span></a></li>
					<li><a href="#project" class="scroll"><span>Project Exp.</span></a></li>
					<li><a href="#portfolio" class="scroll"><span>Portfolio</span></a></li>
					<li><a href="comingsoon/index.html" class="scroll"><span>Blog</span></a></li>
					<li><a href="#built" class="scroll"><span>Built</span></a></li>
					<li><a href="#contact" class="scroll"><span>Contact</span></a></li>
				</ul>
				</div> 	  
				<div class="clearfix"> </div>		
			</div>
			<div class="footer-btm-agileinfo">
				<div id="socLeft" class="col-md-4 col-xs-4 footer-grid w3social">
					<h3>Social Media</h3>
					<div class="social-icon">
						<a href="www.twitter.com/dickait" class="social-button twitter"><i class="fa fa-twitter"></i></a>
						<a href="www.facebook.com/dickaariptianr" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
						<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
						<a href="www.steamcommunity.com/id/dickait" class="social-button dribbble"><i class="fa fa-steam"></i></a> 
					</div> 
				</div> 
				<div class="col-md-8 col-xs-8 footer-grid footer-review">
					<!-- <h3>Newsletter</h3>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Your Email" required="">
						<input type="submit" value="Subscribe"> 
						<div class="clearfix"> </div>
					</form>  -->
					<div id="copyRight" class="copy-w3lsright"> 
						<p>© 2017 Dicka's. All rights reserved </p>
					</div> 
				</div> 
				<div class="clearfix"> </div>
			</div>   
		</div>
	</div> 
	<!-- //footer end here -->   
	<!-- Kick off Filterizr -->
	<script src="<?php echo e(asset('assets/profile/js/jquery.filterizr.js')); ?>"></script>  
	<script src="<?php echo e(asset('assets/profile/js/controls.js')); ?>" ></script> 
	<script type="text/javascript">
		$(function() {
			//Initialize filterizr with default options
			$('.filtr-container').filterizr();
		});
	</script>	
	<!-- swipe box js -->
	<script src="<?php echo e(asset('assets/profile/js/jquery.swipebox.min.js')); ?>" ></script> 
	<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script> 
	<!-- //swipe box js --> 	 
	<!-- start-smooth-scrolling -->
	<script src="<?php echo e(asset('assets/profile/js/SmoothScroll.min.js')); ?>" ></script> 
	<script type="text/javascript" src="<?php echo e(asset('assets/profile/js/move-top.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('assets/profile/js/easing.js')); ?>"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo e(asset('assets/profile/js/bootstrap.js')); ?>"></script>
    <!-- reveal object -->
    <script>
    	window.sr = ScrollReveal();
    	sr.reveal('.agile-logo', {
    		duration: 2000,
    		origin: 'top'
    	});
    	sr.reveal('.agileits-w3layouts-icons', {
    		duration: 2000,
    		origin: 'right',
    		mobile: true
    	});
    	sr.reveal('.rslides', {
    		duration: 2000,
    		origin: 'bottom',
    		delay: 50,
    		distance: '200px'
    	});
    	sr.reveal('.w3l', {
    		duration: 2000,
    		origin: 'bottom',
    		delay: 100,
    		distance: '200px',
    		viewFactor: 0.2
    	});
    	sr.reveal('#about1', {
    		duration: 2000,
    		origin: 'left',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '200px'
    	});
    	sr.reveal('#about2', {
    		duration: 2000,
    		origin: 'top',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '200px'
    	});	
    	sr.reveal('#about3', {
    		duration: 2000,
    		origin: 'right',
    		viewFactor: 0.2,
    		mobile: true,
    		reset: true
    	});
    	sr.reveal('.agileits-title', {
    		duration: 1000,
    		origin: 'left',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '100px'
    	});
    	sr.reveal('#thnSD', {
    		duration: 2000,
    		origin: 'left',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '200px'
    	});
    	sr.reveal('#SD', {
    		duration: 2000,
    		origin: 'right',
    		viewFactor: 0.2,
    		mobile: true,
    		reset: true
    	});
    	sr.reveal('#thnSMP', {
    		duration: 2000,
    		origin: 'left',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '200px'
    	});
    	sr.reveal('#SMP', {
    		duration: 2000,
    		origin: 'right',
    		viewFactor: 0.2,
    		mobile: true,
    		reset: true
    	});
    	sr.reveal('#thnSMA', {
    		duration: 2000,
    		origin: 'left',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '200px'
    	});
    	sr.reveal('#SMA', {
    		duration: 2000,
    		origin: 'right',
    		mobile: true,
    		viewFactor: 0.2,
    		reset: true
    	});
    	sr.reveal('#thnPT', {
    		duration: 2000,
    		origin: 'left',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '200px'
    	});
    	sr.reveal('#PT', {
    		duration: 2000,
    		origin: 'right',
    		mobile: true,
    		viewFactor: 0.2,
    		reset: true
    	});
    	sr.reveal('#skill-bar', {
    		duration: 2000,
    		origin: 'left',
    		viewFactor: 0.5,
    		reset: true,
    		distance: '200px'
    	});	
    	sr.reveal('#skill', {
    		duration: 2000,
    		origin: 'right',
    		mobile: true,
    		viewFactor: 0.5,
    		reset: true
    	});
    	sr.reveal('#kursus', {
    		duration: 2000,
    		origin: 'bottom',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '200px'
    	});	
    	sr.reveal('#project-left', {
    		duration: 2000,
    		origin: 'left',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '200px'
    	});	
    	sr.reveal('#project-right', {
    		duration: 2000,
    		origin: 'right',
    		mobile: true,
    		viewFactor: 0.2,
    		reset: true
    	});	
    	sr.reveal('#list-port', {
    		duration: 1000,
    		origin: 'bottom',
    		viewFactor: 0.1,
    		reset: true,
    		distance: '100px'
    	});
    	sr.reveal('#list-port', {
    		duration: 1000,
    		origin: 'bottom',
    		viewFactor: 0.1,
    		reset: true,
    		distance: '100px'
    	});
    	sr.reveal('.contact-info', {
    		duration: 1000,
    		origin: 'bottom',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '100px'
    	});	
    	sr.reveal('#socLeft', {
    		duration: 1000,
    		origin: 'left',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '100px'
    	});
    	sr.reveal('#copyRight', {
    		duration: 1000,
    		origin: 'bottom',
    		viewFactor: 0.2,
    		delay: 100,
    		reset: true,
    		distance: '100px'
    	});		
    							
    </script>
</body>
</html>