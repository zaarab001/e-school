<?php
session_start();

include('includes/dbconnect.php');

if($_GET['app'])
	{
 		$app_id = $_GET['app'];
		$delete_applicant = mysqli_query($connect, "DELETE FROM `applicant_info` WHERE `applicant_id` = '$app_id'");
		if($delete_applicant)
		{
			
			$_SESSION["errormsg"] = 'Delete Successful';
			header('location:manage-applicants.php?successful=1');
			echo '<span class="label label-success">Delete Successful!</span>';
			
		}
		else
		{
			 header('location:manage-applicants.php');
			echo '<span class="label label-danger">Delete Not Successful!</span>';
		}
	}
?>