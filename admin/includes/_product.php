<?php
// define a constant for the maximum upload size
define ('MAX_FILE_SIZE', 1024000); //1 mb and below accepted only
if (array_key_exists('upload_p', $_POST)) {

			
				//input validation
				function sanitize($connect,$str){
				$str =@trim($str);
				$str = strip_tags($str);
				
				return mysqli_real_escape_string($connect,$str);
				}
				
	$title = sanitize($connect, $_POST['title']);
	$description = sanitize($connect, $_POST['description']);
	$content = sanitize($connect, $_POST['content']);
	$fullname = $_SESSION['fullname'];
	
	
	
// define constant for upload folder
define('UPLOAD_DIR', 'images/product/');

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

			//$image = $_FILES['image']['tmp_name'];
			$product = mysqli_query($connect, "INSERT INTO products
											(
											title,
											description,
											content,
											image,
											posted_by,
											date_posted
											)
											VALUES(
											'$title',
											'$description',
											'$content',
											'$file',
											'$fullname',
											Now()
											)");//Product Upload info
											if($product)
											{
												echo '<span class="label label-success">Product Successfully Upload</span>';
											}
											else
											{
												echo '<span class="label label-danger">Product not Successfully Upload</span>';
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


?>


