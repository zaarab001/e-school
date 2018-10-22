<?php
if(isset($_POST['create_profile']))
		{
//input validation
	function sanitize($connect, $str)
	{
	$str = @trim($str);
	$str = strip_tags($str);
	
	return mysqli_real_escape_string($connect,$str);
	}
			$applicant_name = sanitize($connect, $_POST['applicant_name']);
			$mobile = sanitize($connect, $_POST['mobile']);
			$dob = sanitize($connect, $_POST['dob']);
			
			$gender = sanitize($connect, $_POST['gender']);
			$state = sanitize($connect, $_POST['state']);
			$lg = sanitize($connect, $_POST['lg']);
			$address = sanitize($connect, $_POST['address']);
			$email = sanitize($connect, $_POST['email']);
			
			
			
			if(!(empty($applicant_name)) && !(empty($mobile)) && !(empty($dob)) && !(empty($gender)) && !(empty($state)) && !(empty($lg)) && !(empty($address)) && !(empty($email)))
			{
				
				$check_email = mysqli_query($connect, "SELECT * FROM applicant_info WHERE email = '$email'");
					if(mysqli_num_rows($check_email)==1)
					{//start of checking if email exist
						echo '<span class="label label-danger">Sorry Email used by another user</span>';
					}//end of checking if email exist
					
					else{//strat of else if email exist
					
				$applicant = mysqli_query($connect, "INSERT INTO applicant_info
				
				(`applicant_name`, `mobile`, `dob`, `gender`, `state`, `lg`, `address`, `email`, `profile_status`) VALUES ('$applicant_name','$mobile','$dob','$gender','$state','$lg','$address','$email', '0')"); // Applicant Create Profile info
											
											if($applicant)
											{
												
												$_SESSION['applicant_id'] = $applicant_id;
												$_SESSION['applicant_name'] = $applicant_name;
												$_SESSION['mobile'] = $mobile;
												$_SESSION['dob'] = $dob;
												$_SESSION['gender'] = $gender;
												$_SESSION['state'] = $state;
												$_SESSION['lg'] = $lg;
												$_SESSION['address'] = $address;
												$_SESSION['email'] = $email;
												$_SESSION['profile_status'] = '0';
												
												header("location:student-profile.php");
												echo '<span class="label label-success">Registeration Successfull</span>';
											}
											else
											{
												echo '<span class="label label-danger">Registeration not Successfull</span>';
											}
							
							}//end of else if email exist
											
				
				}//end of if input fields not empty
				else
				{
					echo 'Fill in all the asteric sign*';
					}
		}
  ?>