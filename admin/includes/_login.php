<?php
		 if(isset($_POST['login']))
		 {
		
//input validation
	function sanitize($connect, $str)
	{
	$str = @trim($str);
	$str = strip_tags($str);
	
	return mysqli_real_escape_string($connect,$str);
	}

			$email = sanitize($connect, $_POST['email']);
			$password = sanitize($connect, $_POST['password']);
			
			if(!(empty($email)) && !(empty($password)))
			{			 
			$Login = mysqli_query($connect, "SELECT `admin_id`, `fullname`, `email`, `password`, `mobile`, `position` FROM `admin` WHERE `email` = '$email'");
			
			if (mysqli_num_rows($Login) == 1)
			
			{
				$row = mysqli_fetch_assoc($Login);
				$admin_id = $row['admin_id'];
				$fullname = $row['fullname'];
				$email = $row['email'];
				$mobile = $row['mobile'];
				$position = $row['position'];
				
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['admin_id'] = $admin_id;
				$_SESSION['fullname'] = $fullname;
				$_SESSION['email'] = $email;
				$_SESSION['mobile'] = $mobile;
				$_SESSION['position'] = $position;
				
				header('location:index.php');
								
				//echo '<span class="d-lg-block bg-success">Log in Successfull</span>';
				}
				else
				{
					echo '<span class="d-lg-block bg-danger">Log in detail incorrect</span>';
					}
			}
						
			}
?>