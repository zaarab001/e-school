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
<!--Hamdasa Blog-->
<br><br><div class="container">
			<h3 class="w3l-title">Hamdasa Blog</h3>
                 <div class="w3layouts_header">
                      <p><i class="fa fa-clone" aria-hidden="true"></i></p>
                 </div>
		<div class="wthree_footer_grid_left" style="margin-left:50px">
			<div class="col-md-4 col-xs-4 wthree_footer_grid_left1">
            <!--Hamdasa Blog Recent News-->
				<div class="contact-grid1">
				<div class="contact-top1">
                 <h4>Quick Links</h4>
				<ul> 
                	<li><a href="index.php">Our Services</a></li>
                    <li><a href="index.php">Student Portal</a></li>
                    <li><a href="index.php">Our Products</a></li>
                    <li><a href="index.php">About Us</a></li>
				</ul>
			</div>
		  </div>
          <!--Hamdasa Blog Quick Links-->
          <div class="contact-grid1">
				<div class="contact-top1">
                 <h4>Social Pages</h4>
				<ul> 
                	<li><a href="#"><i class="fa fa-home"></i>Home Page</a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i> Our Facebook Page</a></li>
					<li><a href="#"><i class="fa fa-twitter"></i>Our Twitter Page</a></li>
                    <li><a href="#"><i class="fa fa-whatsapp"></i>Chat Us on Whatsapp</a></li>
				</ul>
			</div>
		  </div>
			</div>
             <div class="col-md-8 col-xs-8">
                            <?php
                        $sql = "SELECT * FROM blog ORDER BY blog_id DESC LIMIT 2 ";
						$query = mysqli_query($connect, $sql);
				
					if($query){
					while($row = mysqli_fetch_array($query)){
					$pic = $row['image'];
					$check_pic = "admin/images/blog/$pic";
					$default_pic = "admin/images/blog/default_pic.jpg";
					
					$blog_id = $row['blog_id'];
					$title = $row['title'];
					$content = $row['content'];
					$posted_by = $row['posted_by'];
					$date_posted = $row['date_posted'];
					
				
			
					//$default_pic = "members/0/default.jpg";
					if (file_exists($check_pic)) {
						$hamdasa_pic = "<img src=\"$check_pic?\" width=\"600px\" height=\"300px\" />";
						// forces picture to be 600px wide and no more
					} else {
						$hamdasa_pic = "<img src=\"$default_pic\" width=\"600px\" height=\"300px\" />"; // forces default picture to be 600px wide and no more
					}
				?>
				<div class="contact-grid1">
					<div class="contact-top1">
                		<div class="panel-body">
                       <?php echo $hamdasa_pic;?>
                      <br>
                      <div class="login-social-grids">
						<ul>
							<li><i class="fa fa-user"></i> Posted by <?php echo $posted_by?>|</li>
							<li><i class="fa fa-comments"></i> 4 Comments</li>
						</ul><br>
                        <h3><?php echo $title;?></h3><br>
						<h5 align="justify"><?php echo $content;?></h5>
                      </div>
                   </div>
				</div>
			</div>
            <?php
            }
				}?>
          	<div class="clearfix"> </div>
		</div>
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