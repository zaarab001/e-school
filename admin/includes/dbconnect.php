<?php


//Define variable for connection
$hostname = "localhost";
$username="root";
$pass="";
$db_name="hamdasa";


//db Connection
$connect = mysqli_connect($hostname, $username, $pass, $db_name);
if ($connect)
{
	//echo 'DB Connected';	
}
	else
{
	//echo 'DB not Connected';
}

?>