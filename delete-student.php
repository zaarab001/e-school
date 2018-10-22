<?php
session_start();

include('includes/dbconnect.php');

if($_GET['sid'])
	{
 		$app = $_GET['app'];
		$delete_applicant = mysqli_query($connect,"DELETE FROM applicant_info WHERE applicant_id = $app");
		if($delete_applicant)
		{
			
			$_SESSION["errormsg"] = 'Delete Successful';
			header('location:manage_student.php?successful=1');
			echo '<span class="label label-success">Delete Successful!</span>';
			
		}
		else
		{
			 header('location:manage-students.php');
			echo '<span class="label label-danger">Delete Not Successful!</span>';
		}
	}
?>