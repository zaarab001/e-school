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
						<li><a href="index.php" class="effect-3">Back to Hamdasa Global Investment Home Page</a></li>
                        <li><a href="blog.php" class="effect-3">Blog</a></li>
					</ul>
				</nav>

			</div>
		</nav>	
		<div class="clearfix"> </div> 
	</div>
</div>
<!--Student Profile-->
<?php $email = $_SESSION['email'];?>
<br><br><div class="container">
			<h3 class="w3l-title">Student Profile</h3>
                 <div class="w3layouts_header">
                      <p><i class="fa fa-user-o" aria-hidden="true"></i></p>
                 </div>
                  <?php
                        $sql = "SELECT * FROM applicant_info WHERE email = '$email'";
						$query = mysqli_query($connect, $sql);
				
					if($query){
					while($row = mysqli_fetch_array($query)){
					$pic = $row['image'];
					$check_pic = "images/passport/$pic";
					$default_pic = "images/passport/default_pic.jpg";
					
					$applicant_id = $row['applicant_id'];
					$applicant_name = $row['applicant_name'];
					$email = $row['email'];
					$application_number = $row['application_number'];
					$course = $row['course'];
					$image = $row['image'];
					$profile_status = $row['profile_status'];
					
					if (file_exists($check_pic)) {
						$passport = "<img src=\"$check_pic?\" width=\"150px\" height=\"150px\" />";
						// forces picture to be 150px wide and no more
					} else {
						$passport = "<img src=\"$default_pic\" width=\"150px\" height=\"150px\" />"; 
						// forces default picture to be 150px wide and no more
					}
				}
			}
				?>
		<div class="wthree_footer_grid_left" style="margin-left:50px">
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
            <center><p><?php echo $passport;?></p></center>
				<h4><?php echo $application_number; ?></h4>
				<ul>
                	<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="student-profile.php"><i class="fa fa-user"></i> Applicant Profile</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="payment.php"><i class="fa fa-paypal"></i> Print Payment Details</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="upload.php"><i class="fa fa-upload"></i> Upload Payment Slip</a></li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href=""><i class="fa fa-print"></i> Print Application Form</a></li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
				</ul>
			</div>
             <div class="col-md-8 col-xs-8">
				<div class="contact-grid1">
				<div class="contact-top1">
                  <div class="btn-danger" align="center"><h2>Print Payment Details</h2></div><br>
                 <center><em>Relevant fees ranging from Ten thousand naira (10,000:00) to Thirty five
thousand naira (35,000:00) is expected to be paid into the following Bank Details.<br><br>Kindly Print the Slip</em><br><br></center>
					 <table class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr>
                            <th width="200px">Name of Account:</th>
                            <th>Hamdasa Global Investment Limited</th>
                             </tr>
                          </thead>
                          <tbody>
                            <tr>
                            <td>Name of Bank:</td>
                            <td>Fidelity Bank PLC</td>
                            </tr>
                            <tr>
                            <td>Account Number:</td>
                            <td>4010570701</td>
                            </tr>
                         </tbody>
                      </table>
                       <table class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr>
                            <th width="200px">Application Number:</th>
                            <th><?php echo $application_number; ?></th>
                             </tr>
                          </thead>
                          <tbody>
                            <tr>
                            <td>Name of Applicant:</td>
                            <td><?php echo $applicant_name;?></td>
                            </tr>
                            <tr>
                           <td>Course Registered for:</td>
                           <td><?php echo $course = $course;
								if ($course=="DRI")
								echo 'Driving School';
								elseif ($course=="HERB")
								echo 'Herbal School';
								else
								echo 'Course Not Registered';?>
                            </td>
                            </tr>
                            <tr>
                            <td>Email:</td>
                            <td><?php echo $email;?></td>
                            </tr>
                         </tbody>
                      </table>
                      <div align="center">
                      <button type="submit" class="btn-primary" name="print_payment"> Print </button>
                      </div>
				</div>
			</div>
		  </div>
		<div class="clearfix"> </div>
	</div>
</div>

<!-- Modal1 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="signin-form profile">
					<h3 class="agileinfo_sign">Sign In</h3>	
					<div class="login-form">
						<form action="#" method="post">
							<input type="email" name="email" placeholder="E-mail" required>
							<input type="password" name="password" placeholder="Password" required>
							<div class="tp">
								<input type="submit" value="Sign In">
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
<!-- //Modal1 -->	
<br><br>
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

<!--/script-->
	<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
<!-- //Baneer-js -->


<!-- //js-scripts -->
</body>
</html>