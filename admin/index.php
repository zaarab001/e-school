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
<!--updates updates-->
	 <div class="market-updates">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
                <?php
					$applicant = "SELECT * FROM applicant_info";
					$query = mysqli_query($connect, $applicant);
							
					$totalNum = mysqli_num_rows($query);
					
					if ($totalNum > 0){
									
					?>
					<div class="col-md-8 market-update-left">
						<h3><?php echo $totalNum;
						}
						else {
							
							echo 'No Applicant registered yet';
						}
							   ?></h3>
						<h4>Total Applicants</h4>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
				 <div class="col-md-8 market-update-left">
					<h3>135</h3>
					<h4>Daily Visitors</h4>
				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					 <?php
					$staff = "SELECT * FROM staff_info";
					$query = mysqli_query($connect, $staff);
							
					$totalstaff = mysqli_num_rows($query);
					
					if ($totalstaff > 0){
									
					?>
				 <div class="col-md-8 market-update-left">
					<h3><?php echo $totalstaff;
					}
					else {
						
						echo 'No Applicant registered yet';
					}
						   ?></h3>
						<h4>Toal Staffs</h4>
						</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
<!--updates end here-->
<!--Students and Staffs List-->

<div class="chit-chat-layer1">
 			<div class="col-md-6 chit-chat-layer1-left">
            
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Recent Applicants List
                            </div><br>
                     <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>Gender</th>
                                      <th>Course</th>
                                      <th>Email</th>
                                  </tr>
                              </thead>
                              <tbody>

                            <?php
                        $sql = "SELECT * FROM applicant_info ORDER BY applicant_id DESC LIMIT 6 ";
						$query = mysqli_query($connect, $sql);
				
					if($query){
					while($row = mysqli_fetch_array($query)){
						
					$applicant_id = $row['applicant_id'];
					$applicant_name = $row['applicant_name'];
					$email = $row['email'];
					$course = $row['course'];
					$gender = $row['gender'];
					
					
				?>
                              
                                <tr>
                                  <td><?php echo $applicant_name;?></td>
                                  <td><?php echo $gender;?></td>                                 
                                  <td><?php echo $course;?></td>
                                  <td><?php echo $email;?></td>
                              </tr>
                         
                  <?php
					}
					}
				  ?>
                   </tbody>
                      </table>
                  </div>
             </div>
      </div>
     <div class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Staffs List
                            </div><br>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>Gender</th>                                   
                                      <th>Postion</th>
                                      <th>Email</th>
                                  </tr>
                              </thead>
                              <tbody>
                                 <?php
                        $sql = "SELECT * FROM staff_info ORDER BY staff_id DESC LIMIT 6 ";
						$query = mysqli_query($connect, $sql);
				
					if($query){
					while($row = mysqli_fetch_array($query)){
						
					$staff_id = $row['staff_id'];
					$fullname = $row['fullname'];
					$email = $row['email'];
					$mobile = $row['mobile'];
					$position = $row['position'];
					
					
				?>
                              
                                <tr>
                                  <td><?php echo $fullname;?></td>
                                  <td><?php echo $email;?></td>                                 
                                  <td><?php echo $mobile;?></td>
                                  <td><?php echo $position;?></td>
                              </tr>
                         
                  <?php
					}
					}
				  ?>
                          </tbody>
                      </table>
                  </div>
             </div>
      </div>
</div><div class="clearfix"> </div>
<!--Students and Staffs List end here-->

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p><?php echo '&copy; '. date("Y").'  Hamdasa. All rights reserved | Powered by ';?><a href="https://www.facebook.com/2jmlab" target="_blank"> 2JM Lab Nig Ltd</a></p>
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