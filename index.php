<?php 
session_start();
ob_start();
ob_flush();
include ('includes/dbconnect.php');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<?php include ('includes/head.php');?>
</head>
<body>
<!-- banner -->
<div class="main_section_agile" id="home">
	<div class="agileits_w3layouts_banner_nav">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<img src="images/logo.jpg">

			</div>
			<ul class="agile_forms">
				<li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a> </li>
			</ul>
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php" class="effect-3">Home</a></li>
						<li><a href="#about" class="effect-3 scroll">About Us</a></li>
						<li><a href="#services" class="effect-3 scroll">Our Services</a></li>
						<li><a href="#team" class="effect-3 scroll">Our Products</a></li>
						<li><a href="#gallery" class="effect-3 scroll">Gallery</a></li>
						<li><a href="#mail" class="effect-3 scroll">Mail Us</a></li>
                        <li><a href="blog.php" class="effect-3">Blog</a></li>
					</ul>
				</nav>

			</div>
		</nav>	
		<div class="clearfix"> </div> 
	</div>
</div>
<!-- banner -->
<div class="about-bottom">
	<div class="col-md-6 w3l_about_bottom_left">
		<div class="video-grid-single-page-agileits">
			<div data-video="E91gAjunqOM"> <img src="images/banner.jpg" alt="" class="img-responsive"/> </div>
		</div>
	</div>
	<div class="col-md-6 w3l_about_bottom_right one">
		<div class="abt-w3l">
			<div class="header-w3l">
				<h2>Registeration Form</h2>
				<h4 style="size:35px; text-align:center; color:#FC0;">Enroll to Our Drivnig School or Herbal School.</h4>
                <?php include('includes/_applicant.php');?>
				<form  class="mod2" action="" method="post">
					<div class="col-md-6 col-xs-6 w3l-left-mk">
						<ul>
							<li class="text">Name of Applicant :  </li>
							<li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input name="applicant_name" type="text" required></li>
							<li class="text">Date of Birth :  </li>
							<li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true"></i><input class="date" id="datepicker" name="dob" type="text" value="" required /></li>
							<li class="text">State  :  </li>
							<li class="agileits-main"><i class="fa fa-map-marker" aria-hidden="true"></i><input name="state" type="text" required></li>
                            <li class="text">Residential Address  :  </li>
							<li class="agileits-main"><i class="fa fa-home" aria-hidden="true"></i><input name="address" type="text" required></li>
						</ul>
					</div>
					<div class="col-md-6 col-xs-6 w3l-right-mk">
						<ul>
							<li class="text">Mobile no  :  </li>
							<li class="agileits-main"><i class="fa fa-phone" aria-hidden="true"></i><input name="mobile" type="text" required></li>
                            <li class="text">Gender  :  </li>
							<li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input name="gender" type="text" required></li>
							<li class="text">Local Govt.  :  </li>
							<li class="agileits-main"><i class="fa fa-map-marker" aria-hidden="true"></i><input name="lg" type="text" required></li>
                        	<li class="text">Email  :  </li>
							<li class="agileits-main"><i class="fa fa-envelope-o" aria-hidden="true"></i><input name="email" type="email" required></li>	   
						</ul>
					</div>
					<div class="clearfix"></div>
					<div class="agile-submit">
						<input type="submit" name="create_profile" value="Create Profile">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- Modal1 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="signin-form profile">
					<h3 class="agileinfo_sign">LogIn to Student Potral</h3>	
					<div class="login-form">
                    <?php include('includes/login.php');?>
						<form action="" method="post">
							<input type="email" name="email" placeholder="E-mail" required>
							<input type="text" name="mobile" placeholder="Mobile Number" required>
							<div class="tp">
								<input type="submit" name="login" value="Login">
							</div>
						</form>
					</div>
					<div class="login-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
					<p><a href="index.php"> Don't have an account?</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"> </div> 
<!-- //Modal1 -->	
<!-- about -->
<br><div class="about-top" id="about">
	<div class="container">
		<h3 class="w3l-title">About Us</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-gg" aria-hidden="true"></i></p>
		</div>
		<div class="col-md-7 wthree-services-bottom-grids">
			<div class="wthree-services-left">
				<img src="images/b.jfif" alt="" width="400px" height="400px">
			</div>
			<div class="wthree-services-right">
				<img src="images/b2.jpeg" alt="" width="400px" height="400px">
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-5 wthree-about-grids">
           <p style="text-align:justify">OUR MISSION:<br>To be a role model, giving hope to the hopeless through dint of hard work determination and prayers.<br><br>OUR GOALS:<br>Striving and engaging in different businesses to generate income and providing humanity with ease, sincere and reliable products and services that guarantee value for money.<br><br>To give a month training program for learner drivers in both theory and practicals while equally handling refresher courses for old drivers, organizations and groups.</p>
           	<a href="#" class="trend-w3l" data-toggle="modal" data-target="#myModal"><span>Read More</span></a>
			<a href="#mail" class="trend-w3l scroll"><span>Get In Touch</span></a>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- modal -->
<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div> 
			<div class="modal-body">
				<img src="images/b4.jpg" alt=""> 
				<p>HAMDASA FRUITS, HERBAL AND ISLAMIC REMEDIES as a branch that addresses human ailments and disease conditions
for the good health of humanity.<br>
Let me use this forum to thank Allah for his in using me as a medium to restore good health to numerous number of people whose testimonies you shall be reading in our testimony page. Permit me to say we have medications to treat and handle effectively; the following ailments and disease conditions:<br>
Thus we treat:<br>
<div style="margin-left:20px">
<ul>
<li>Alcer</li>
<li>Pile/ Hemorrhoids</li>
<li>Malaria and Typhoid</li>
<li>Sickle cell anemia</li>
<li>Sexual dysfunction in both men and women. (Weak erection, watery and zero or low sperm count for men, Dryness and
painful sexual intercouse and menstrual pain for women)</li>
<li>Pelvic Inflationary Diseases (PIDs)</li>
<li>Sexually Transmitted Diseases (STDs)</li>
<li>General body pain</li>
<li>Rheumatoid/ Gaut</li>
<li>Knee and joint pain</li>
<li>High Blood Pressure/ Hyperension</li>
<li>Diabetes e.t.c</li>
</ul>
It is our intention to educate our visitors to this site on the causes and natural remedies to these ailments and diseases.
</p>
				</div> 
			</div>
		</div>
	</div>
</div>
<!-- //modal --> 
<!-- //about -->

<!-- services -->
<div class="services" id="services" >
	<div class="container">  
		<h3 class="w3l-title">Our Services</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-first-order" aria-hidden="true"></i></p>
		</div>
		<div class="services-w3ls-row">
			<div class="col-xs-4 services-grid agileits-w3layouts">
				<span class="fa fa-cab" aria-hidden="true"></span>
				<h6>01</h6>
				<h5>Driving School</h5>
				<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
			</div>
			<div class="col-xs-4 services-grid agileits-w3layouts">
				<h6>02</h6>
				<h5>Treating Illness</h5>
				<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
				<span class="fa fa-user-o grid-w3l-ser" aria-hidden="true"></span>
			</div>
			<div class="col-xs-4 services-grid agileits-w3layouts">
				<span class="fa fa-envira" aria-hidden="true"></span>
				<h6>03</h6>
				<h5>Herbal School</h5>
				<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
			</div> 
			<div class="clearfix"> </div>
		</div>  
	</div>
</div>
<!-- //services -->
<!-- team -->
<div class="team-w3l" id="team">
	<div class="container">
		<h3 class="w3l-title">Our Products</h3>
        <p style="text-align:center; color:#FFF; size:14px">Names of diseases and natural remedies to these ailments.</p>
		<div class="w3layouts_header">
			<p><i class="fa fa-shopping-cart" aria-hidden="true"></i></p>
            </div>
            
		<div class="team-w3l-grid">
			<div class="col-md-4 col-xs-4 about-poleft t1">
				<div class="about_img"><img src="images/p.jpg" alt="" width="400px" height="400px">
				  <h5>Alcer</h5>
				  <div class="about_opa">
					<p>For Alcer</p>
					
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t2">
				<div class="about_img"><img src="images/p1.png" alt="" width="400px" height="400px">
				  <h5>Pile/ Hemorrhoids</h5>
				  <div class="about_opa">
					<p>Pile/ Hemorrhoids</p>
					
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t3">
				<div class="about_img"><img src="images/p2.jpg" alt="" width="400px" height="400px">
				  <h5>Sickle cell anemia</h5>
				  <div class="about_opa">
					<p>Sickle cell anemia</p>
					
				  </div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="team-w3l-grid grid-2-team">
			<div class="col-md-4 col-xs-4 about-poleft t1">
				<div class="about_img"><img src="images/p3.jpg" alt="" width="400px" height="400px">
				  <h5>Malaria and Typhoid</h5>
				  <div class="about_opa">
					<p>Malaria and Typhoid</p>
					
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t2">
				<div class="about_img"><img src="images/p4.jfif" alt="" width="400px" height="400px">
				  <h5>Sexual dysfunction</h5>
				  <div class="about_opa">
					<p>For both men and women.</p>
					
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t3">
				<div class="about_img"><img src="images/p5.jfif" alt="" width="400px" height="400px">
				  <h5>High B.P/ Hyperension</h5>
				  <div class="about_opa">
					<p>High Blood Pressure/ Hyperension</p>
					
				  </div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //team -->

<!-- Gallery -->
<section class="portfolio-w3ls" id="gallery">
		<h3 class="w3l-title">Our Gallery</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-clone" aria-hidden="true"></i></p>
		</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/learner-man.jpg" class="swipebox"><img src="images/learner-man.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Driving School</h4>
							<p><i class="fa fa-cab" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/5564825_mockup5_jpeg108bb75677ebb023dbd53c861e791f17.jfif" class="swipebox"><img src="images/5564825_mockup5_jpeg108bb75677ebb023dbd53c861e791f17.jfif" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Harbal and Islamic Remedies</h4>
							<p><i class="fa fa-envira" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/learner-man.jpg" class="swipebox"><img src="images/learner-man.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Driving School</h4>
							<p><i class="fa fa-cab" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/5564825_mockup5_jpeg108bb75677ebb023dbd53c861e791f17.jfif" class="swipebox"><img src="images/5564825_mockup5_jpeg108bb75677ebb023dbd53c861e791f17.jfif" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Harbal and Islamic Remedies</h4>
							<p><i class="fa fa-envira" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/learner-man.jpg" class="swipebox"><img src="images/learner-man.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Driving School</h4>
							<p><i class="fa fa-cab" aria-hidden="true"></i></p>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/b1.jpg" class="swipebox"><img src="images/b1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Harbal and Islamic Remedies</h4>
							<p><i class="fa fa-envira" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/learner-man.jpg" class="swipebox"><img src="images/learner-man.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Driving School</h4>
							<p><i class="fa fa-cab" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/herbal.jpg" class="swipebox"><img src="images/herbal.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Harbal and Islamic Remedies</h4>
							<p><i class="fa fa-envira" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				</a>
				</div>
				<div class="clearfix"> </div>
</section>
<!-- //gallery -->
<!-- contact -->
<div id="mail" class="contact">
	<div class="container">
		<h3 class="w3l-title">Mail Us</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-envelope-o" aria-hidden="true"></i></p>
		</div>
		<div class="agile_banner_bottom_grids">
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agilew3_contact">
					<h4>Address</h4>
					<p>No1, Ibrahim Badamasi Babangida Road,</p>
					<p>Opposite Paiko Road Police Station, Minna, Niger State, Nigeria.</p>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left agileits_w3layouts_left">
					<i class="fa fa-mobile" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agileits_w3layouts_right">
					<h4>Phone</h4>
					<p>+(234) 8160 730 725 <span>+(234) 7064 663 601</span><span>+(234) 7064 663 601</span></p>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left agileits_w3layouts_left1">
					 <i class="fa fa-envelope-o" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agileits_w3layouts_right1">
					<h4>Email</h4>
					<p><a href="">info@hamdasaglobal.com.ng</a>
						<span><a href="">info@hamdasaglobal.com.ng</a></span><a href="">info@hamdasaglobal.com.ng</a></span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="w3l-form">
			<h3 class="w3l-title">Get In Touch</h3>
			<div class="contact-grid1">
				<div class="contact-top1">
					<form action="#" method="post">
						<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<label>Name*</label>
							<input type="text" name="Name" placeholder="Name" required>
						</div>
                        <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<label>E-mail*</label>
							<input type="email" name="E-mail" placeholder="E-mail" required>
						</div>
						<div class="form-group">
							<label>Message*</label>
							<textarea placeholder name="Message" required></textarea>
						</div>
							<input type="submit" value="Send">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- footer -->
<div class="footer">
	<?php include ('includes/footer.php');?>
</div>
<!-- //footer -->

<!-- js-scripts -->			
<!-- js-files -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js-files -->
<!-- Baneer-js -->

<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- stats -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //stats -->
<!-- moving-top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
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
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //moving-top scrolling -->
<!-- gallery popup -->
<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
jQuery(function($) {
	$(".swipebox").swipebox();
});
</script>
<!-- //gallery popup -->
<!--/script-->
	<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
<!-- //Baneer-js -->
<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	 });
	</script>
<!-- //Calendar -->	

<!-- //js-scripts -->
</body>
</html>