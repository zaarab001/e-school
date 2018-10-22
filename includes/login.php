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
			$mobile = sanitize($connect, $_POST['mobile']);
			
			if(!(empty($email)) && !(empty($mobile)))
			{			 
			$Login = mysqli_query($connect, "SELECT * FROM applicant_info WHERE email = '$email' && mobile = '$mobile'");
			
			if (mysqli_num_rows($Login) == 1)
			
			{
				$row = mysqli_fetch_assoc($Login);
				$applicant_id = $row['applicant_id'];
				$applicant_name = $row['applicant_name'];
				$mobile = $row['mobile'];
				$dob = $row['dob'];
				$gender = $row['gender'];
				$state = $row['state'];
				$mobile = $row['mobile'];
				$lg = $row['lg'];
				$address = $row['address'];
				
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['applicant_id'] = $applicant_id;
				$_SESSION['applicant_name'] = $applicant_name;
				$_SESSION['mobile'] = $mobile;
				$_SESSION['dob'] = $dob;
				$_SESSION['gender'] = $gender;
				$_SESSION['state'] = $state;
				$_SESSION['lg'] = $lg;
				$_SESSION['address'] = $address;
				$_SESSION['email'] = $email;
												
				$_SESSION['application_number'] = $application_number;
				$_SESSION['course'] = $course;
				$_SESSION['image'] = $image;
				$_SESSION['last_sa'] = $last_sa;
				$_SESSION['language_s'] = $language_s;
				$_SESSION['religion'] = $religion;
				$_SESSION['blood_g'] = $blood_g;
				$_SESSION['record_mf'] = $record_mf;
				$_SESSION['facial_mh'] = $facial_mh;												
				$_SESSION['nok_name'] = $nok_name;
				$_SESSION['nok_email'] = $nok_email;
				$_SESSION['nok_mobile'] = $nok_mobile;
				$_SESSION['nok_state'] = $nok_state;
				$_SESSION['nok_lg'] = $nok_lg;
				$_SESSION['nok_contact'] = $nok_contact;
				$_SESSION['profile_status'] = '1';
				
				header('location:student-profile.php');
								
				//echo '<span class="d-lg-block bg-success">Log in Successfull</span>';
				}
				else
				{
					echo '<span class="d-lg-block bg-danger">Log in detail incorrect</span>';
					}
			}
						
			}
?>