<?php 
session_start();
ob_start();
//ob_flush();
include ('includes/dbconnect.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hamdasa Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
</head>
<body>	
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
			</div>
			<div class="login-block">
            <?php include ('includes/_login.php');?>
				<form action="" method="post">
					<input type="text" name="email" placeholder="Email" required>
                    <!--<input type="email" name="email" placeholder="Email" required="">-->
					<input type="password" name="password" class="lock" placeholder="Password">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>Remember me</label>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="login" value="Login">				
				</form>
               <br> <center><h6><?php echo '&copy; '. date("Y").'  Hamdasa. All rights reserved | Powered by ';?><a href="https://www.facebook.com/2jmlab" target="_blank"> 2JM Lab Nig Ltd</a></h6></center>
			</div>
      </div>
</div>
<!--inner block end here-->

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
