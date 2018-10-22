<?php 
session_start();
ob_start();
ob_flush();
include ('includes/dbconnect.php');
include ('includes/authentication.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<?php include ('includes/head.php');?>
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
           <!--header start here-->
         	<div class="header-main">
            <?php include('includes/header.php');?>	
			</div>
			<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
	 <div class="inbox">
    	 <div class="col-md-4 compose">   	 	
    	 	<div class="mail-profile">
    	 		<div class="mailer-name"> 			
    	 				<h5><a href="#"><?php echo $fullname;?></a></h5>  	 				
    	 			     <h6><a href=""><?php echo $email;?></a></h6>
    	 			     <h6><a href=""><?php echo $mobile;?></a></h6>   
    	 		</div>
    	 	    <div class="clearfix"> </div>
    	 	</div>
    	 	<div class="compose-bottom">
    	 		<ul>
    	 			<li><a class="hilate" href="edit-applicant.php"><i class="fa fa-user"> </i> Personal Information</a></li>
    	 			<li><a href="app_health.php"><i class="fa fa-medkit"> </i> Health Information</a></li>
    	 			<li><a href="app_nextofkin.php"><i class="fa fa-user"> </i> Next Of Kin Information</a></li>
    	 		</ul>
    	 	</div>
    	 </div>   	 
    	 	<div class="col-md-8 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							Applicant's Edition 
						</div>
						<div class="inbox-details-body">
							<div class="alert alert-info">
								Please fill details to edit Applicant's Next of Kin Informantion.
							</div>
							<form class="com-mail" action="" method="post">
								<input type="text"  value="Next of Kin Name :" name="nok_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Next of Kin Name';}">
                                <input type="text"  value="Next of Kin Email :" name="nok_email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Next of Kin Email';}">
								<input type="text"  value="Next of Kin State :" name="nok_state" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Next of Kin State';}">
								<input type="text"  value="Next of Kin Local Govt. :" name="nok_lg" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Next of Kin Local Govt.';}">
								<input type="text"  value="State :" name="state" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'State';}">
								<input type="text"  value="Local Govt. :" name="lg" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Local Govt.';}">
                                 <input type="text"  value="Contact Address :" name="address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contact Address';}">	
                                 <input type="text"  value="Email :" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">				
								<input type="submit" name="update_applicant" value="Update"> 
							</form>
						</div>
					</div>
				</div>
    	
          <div class="clearfix"> </div>     
   </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p><?php echo '&copy; '. date("Y").'  Hamdasa. All rights reserved | Powered by ';?><a href="www.facebook.com/2jmlab"> 2JM Lab Nig Ltd</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="images/logo.jpg" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li><a href="manage-applicants.php"><i class="fa fa-users"></i><span>Manage Applicants</span></a></li>
                <li><a href="applicants-tran.php"><i class="fa fa-bookmark"></i><span>Applicant's Transactions</span></a></li>
                 <li id="menu-academico" ><a href="#"><i class="fa fa-user"></i><span>Staff Panel</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="reg-staffs.php">Register Staffs</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="manage-staffs.php">Manage Staffs</a></li>		           
		          </ul>
		        </li>
                 <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Product</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="post-product.php">Post Product</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="manage-product.php">Manage Product</a></li>		           
		          </ul>
		        </li>
		        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Blog</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="post-news.php">Post News</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="manage-news.php">Manage News</a></li>		           
		          </ul>
		        </li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     