<?php
$con=mysqli_connect('localhost','root','','secret_di_db');

if($con==true)
{
	echo"";
}
else
{
	echo"Connection not established Something Went Wrong Please try after some time";
}	
?>