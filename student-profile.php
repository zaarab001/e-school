<?php 
session_start();
ob_start();
ob_flush();
include ('includes/dbconnect.php');?>
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
						<li><a href="index.php" class="effect-3">Navigate to Hamdasa Global Investment Home Page</a></li>
                        <li><a href="blog.php" class="effect-3">Blog</a></li>
					</ul>
				</nav>

			</div>
		</nav>	
		<div class="clearfix"> </div> 
	</div>
</div>

<!--Student Compelte Registeration -->
  <?php
 										
		$profile_status = $_SESSION['profile_status'];
		$applicant_name = $_SESSION['applicant_name'];
		$email = $_SESSION['email'];
	
	if ($profile_status == '0'){
		?>
		
<br><br><div class="container">
			<h4 class="w3l-title"><i class="fa fa-user-o"></i> Welcome <?php echo $applicant_name;?></h4>
              <center><em><h4>Fill in the Following Details to Complete your Registeration</h4></em></center>
           <div class="wthree_footer_grid_left">
			<div class="col-md-2 col-xs-2 wthree_footer_grid_left1"></div>
             <div class="col-md-8 col-xs-8">
				<div class="contact-grid1">
				<div class="contact-top1">
                  <div class="btn-danger"><h3 align="center">Personal Information</h3></div><br><br>
                  <?php include('includes/_complete_applicant.php');?>
					 <form action="#" method="post" enctype="multipart/form-data">
						<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<select name="course" class="form-control m-bot15">
                      		<option name="course" value="non">** Select Course to Enroll **</option>
							<option name="course" value="DRI">Driving School</option>
							<option name="course" value="HERB">Herbal School</option>
                            </select>
						</div>
                        <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
                        <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_FILE_SIZE?>">
                      <strong style="color:#F00">Upload Your Passport less than 1 MB:</strong><input id="image" name="image" required type="file">&nbsp;
                        </div>
                        <div class="col-md-0 col-xs-0 wthree_contact_left_grid"></div>
                        <br><br><br><div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<input type="text" name="last_sa" placeholder="Last School Attended" required>
						</div>
						<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<input type="text" name="language_s" placeholder="Language Spoken" required>
						</div>
                        <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<input type="text" name="religion" placeholder="Religion" required>
						</div>
                         <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<input type="text" name="blood_g" placeholder="Blood Group" required>
						</div>
                         <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<input type="text" name="record_mf" placeholder="Record of Medical Fitness" required>
						</div>
                         <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<input type="text" name="facial_mh" placeholder="Facial Mark. Height" required>
						</div>
                        <div class="col-md-12 col-xs-12 wthree_contact_left_grid">
                        <label class="btn-danger"><h3 align="center">Enter Next of Kin Information</h3></label>
                        </div>
                        <br><div class="col-md-0 col-xs-0 wthree_contact_left_grid"><br></div>
                        <br><br><br><div class="col-md-6 col-xs-6 wthree_contact_left_grid"><br>
							<input type="text" name="nok_name" placeholder="Next of Kin Name" required>
						</div>
						<div class="col-md-6 col-xs-6 wthree_contact_left_grid"><br>
							<input type="email" name="nok_email" placeholder="Next of Kin Email" required>
						</div>
                        <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<input type="text" name="nok_mobile" placeholder="Next of Kin Mobile Number" required>
						</div>
                         <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<input type="text" name="nok_state" placeholder="Next of Kin State" required>
						</div>
                         <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<input type="text" name="nok_lg" placeholder="Next of Kin Local Govnt." required>
						</div>
                         <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<input type="text" name="nok_contact" placeholder="Next of Kin Contact Adrress" required>
						</div>
							<input type="submit" name="save_profile" value="Save">
					</form>
				</div>
			</div>
		  </div>
		<div class="clearfix"> </div>
	</div>
</div>
<?php
	}
	else{
		$email = $_SESSION['email'];
		$applicant_id = $_SESSION['applicant_id'];
?>
		
<!--Student Profile-->
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
					$mobile = $row['mobile'];
					$dob = $row['dob'];
					$gender = $row['gender'];
					$state = $row['state'];
					$lg = $row['lg'];
					$address = $row['address'];
					$email = $row['email'];
					
					$application_number = $row['application_number'];
					$course = $row['course'];
					$image = $row['image'];
					$last_sa = $row['last_sa'];
					$language_s = $row['language_s'];
					$religion = $row['religion'];
					$blood_g = $row['blood_g'];
					$record_mf = $row['record_mf'];
					$facial_mh = $row['facial_mh'];												
					$nok_name = $row['nok_name'];
					$nok_email = $row['nok_email'];
					$nok_mobile = $row['nok_mobile'];
					$nok_state = $row['nok_state'];
					$nok_lg = $row['nok_lg'];
					$nok_contact = $row['nok_contact'];
					$profile_status = $row['profile_status'];
					
					if (file_exists($check_pic)) {
						$passport = "<img src=\"$check_pic?\" width=\"150px\" height=\"150px\" />";
						// forces picture to be 150px wide and no more
					} else {
						$passport = "<img src=\"$default_pic\" width=\"150px\" height=\"150px\" />"; 
						// forces default picture to be 150px wide and no more
					}
				?>
		<div class="wthree_footer_grid_left" style="margin-left:50px">
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
            <center><p><?php echo $passport;?></p></center>
            <?php
				}
					}
				?>
				<br><h4><?php echo $application_number;?></h4>
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
                  <div class="btn-danger"><h2>My Personal Information</h2></div>
					 <table class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr>
                            <th width="200px">Application Number:</th>
                            <th><h4><?php echo $application_number;?></h4></th>
                             </tr>
                          </thead>
                          <tbody>
                            <tr>
                            <td>Name of Applicant:</td>
                            <td><?php echo $applicant_name;?></td>
                            </tr>
                            <tr>
                            <td>Mobile Number:</td>
                            <td><?php echo $mobile;?></h4></td>
                            </tr> 
                            <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $dob;?></td>
                            </tr>
                            <tr>
                            <td>Gender:</td>
                            <td><?php echo $gender;?></td>
                            </tr>
                            <tr>
                            <td>State of Origin:</td>
                            <td><?php echo $state;?></td>
                            </tr>
                            <tr>
                            <td>Local Govnt.:</td>
                            <td><?php echo $lg;?></td>
                            </tr>
                            <tr>
                            <td>Residential Address:</td>
                            <td><?php echo $address;?></td>
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
                             <tr>
                            <td> Last School Attended:</td>
                            <td><?php echo $last_sa;?></td>
                            </tr>
                            <tr>
                            <td>Language Spoken:</td>
                            <td><?php echo $language_s;?></td>
                            </tr>
                            <tr>
                            <td>Religion:</td>
                            <td><?php echo $religion;?></td>
                             </tr>
                            </tbody>
                         </table>
                         <div class="btn-danger"><h2>Health Details</h2></div>
                         <table class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr>
                            <th width="200px">Blood Group:</th>
                            <th><h4><?php echo $blood_g;?></h4></th>
                             </tr>
                          </thead>
                          <tbody>
                            <tr>
                            <td>Record Of Medical Fitness:</td>
                            <td><?php echo $record_mf;?></td>
                            </tr>
                            <tr>
                            <td>Facial Mark. Height:</td>
                            <td><?php echo $facial_mh;?></td>
                            </tr>
                            </tbody>
                            </table>
                        <div class="btn-danger"><h2>Next of Kin Information</h2></div>
                         <table class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr>
                            <th width="200px">Next of Kin Name:</th>
                            <th><h4><?php echo $nok_name;?></h4></th>
                             </tr>
                          </thead>
                          <tbody>
                            <tr>
                            <td>Next of Kin Email:</td>
                            <td><?php echo $nok_email;?></td>
                            </tr>
                            <tr>
                            <td>Next of Kin Phone Number:</td>
                            <td><?php echo $nok_mobile;?></td>
                            </tr> 
                            <tr>
                            <td>Next of Kin State:</td>
                            <td><?php echo $nok_state;?></td>
                            </tr>
                            <tr>
                            <td>Next of Kin Local Govt:</td>
                            <td><?php echo $nok_lg;?></td>
                            </tr>
                            <tr>
                            <td>Next of Kin Contact Adrress:</td>
                            <td><?php echo $nok_contact;?></td>
                            </tr>
                         </tbody>
                      </table>
				</div>
			</div>
		  </div>
		<div class="clearfix"> </div>
	</div>
</div>
 <?php
	}
?>
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