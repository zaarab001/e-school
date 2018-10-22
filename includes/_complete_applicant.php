<?php
// define a constant for the maximum upload size
define ('MAX_FILE_SIZE', 1024000); //1 mb and below accepted only
if (array_key_exists('save_profile', $_POST)) 
	{
	//input validation
	function sanitize($connect, $str){
	$str = @trim($str);
	$str = strip_tags($str);
	
	return mysqli_real_escape_string($connect,$str);
	}
	
	$course = sanitize($connect, $_POST['course']);
	$last_sa = sanitize($connect, $_POST['last_sa']);
	$language_s = sanitize($connect, $_POST['language_s']);
	$religion = sanitize($connect, $_POST['religion']);
	
	$blood_g = sanitize($connect, $_POST['blood_g']);
	$record_mf = sanitize($connect, $_POST['record_mf']);
	$facial_mh = sanitize($connect, $_POST['facial_mh']);
	
	$nok_name = sanitize($connect, $_POST['nok_name']);
	$nok_email = sanitize($connect, $_POST['nok_email']);
	$nok_mobile = sanitize($connect, $_POST['nok_mobile']);
	$nok_state = sanitize($connect, $_POST['nok_state']);
	$nok_lg = sanitize($connect, $_POST['nok_lg']);
	$nok_contact = sanitize($connect, $_POST['nok_contact']);
	$email = $_SESSION['email'];
			
			if(!(empty($course)) && !(empty($last_sa)) && !(empty($language_s)) && !(empty($religion)) && !(empty($blood_g)) && !(empty($record_mf)) && !(empty($facial_mh)) && !(empty($nok_name)) && !(empty($nok_email)) && !(empty($nok_mobile)) && !(empty($nok_state)) && !(empty($nok_lg)) && !(empty($nok_contact)) )
			{
				//GENERATE APPLICATION NUMBER ID
						$app_num = mysqli_query($connect, "SELECT COUNT(applicant_id)AS mid FROM applicant_info");
						while($row = mysqli_fetch_array($app_num)){
							//$course = $row['course'];
							$mid = $row['mid'];
							$mid += 1;
							}
						$application_number  = "HAMDASA/";
						$application_number  .=  ($course.'/'); 
						$application_number  .= date('y'.'/');
						$application_number  .= sprintf("%05d", $mid); 

// define constant for upload folder
define('UPLOAD_DIR', 'images/passport/');

// convert the maximum size to KB
$max = number_format(MAX_FILE_SIZE/1024, 1).'MB';
// create an array of permitted MIME types
$permitted = array('image/jpeg', 'image/JPEG', 'image/jpg', 'image/JPG', 'image/png');

// replace any spaces in the filename with underscores
$file = str_replace(' ', '_', $_FILES['image']['name'] );

// begin by assuming the file is unacceptable
$sizeOK = false;
$typeOK = false;

// check that file is within the permitted size
if ($_FILES['image']['size'] > 0 && $_FILES['image']['size'] <= MAX_FILE_SIZE) {
$sizeOK = true;
}
if ($sizeOK) {
switch($_FILES['image']['error']) {
case 0:
// move the file to the upload folder and rename it
$success = move_uploaded_file($_FILES['image']['tmp_name'],UPLOAD_DIR.$file);

if ($success) {
//$result = "$file uploaded successfully";
												
				$complete_reg = mysqli_query($connect, "UPDATE `applicant_info` SET 
											`application_number`='$application_number',
											`profile_status`='1',
											`course`='$course',
											`image`='$file',
											`last_sa`='$last_sa',
											`language_s`='$language_s',
											`religion`='$religion',
											`blood_g`='$blood_g',
											`record_mf`='$record_mf',
											`facial_mh`='$facial_mh',
											`nok_name`='$nok_name',
											`nok_email`='$nok_email',
											`nok_mobile`='$nok_mobile'
											,`nok_state`='$nok_state',
											`nok_lg`='$nok_lg',
											`nok_contact`='$nok_contact',
											`date_reg`=Now()
											WHERE email = '$email'");
													
											if($complete_reg)
											{
												
												$_SESSION['applicant_id'] = $applicant_id;
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
												header("location:student-profile.php");
												//echo '<span class="label label-success">Registeration Successfull</span>';
											}
											else
											{
												echo '<span class="label label-danger">Registeration not Successfull</span>';
											}
															
}//END OF FILE UPLOADED SUCCESFULLY 
else {
echo '<div class="alert alert-dismissable alert-danger">'."Error uploading $file. Please try again.".'</div>';
}
break;
case 3:
echo '<div class="alert alert-dismissable alert-danger">'."Error uploading $file. Please try again.".'</div>';
default:
echo '<div class="alert alert-dismissable alert-danger">'."System error uploading $file. Contact webmaster.".'</div>';
}
}
elseif ($_FILES['image']['error'] == 4) {
echo '<div class="alert alert-dismissable alert-danger">'.'No file selected'.'</div>';
}
else {
echo '<div class="alert alert-dismissable alert-danger">'."$file cannot be uploaded. Maximum size: $max.".'</div>';
}


}//endof if array key exist

	}
				
 ?>