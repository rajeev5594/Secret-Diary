<?php
session_start();
include("dbcon.php");
if(isset($_POST['submit'])){
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,md5($_POST['password']));
	$sql="insert into users(email,password) values('$email','$password')";
	$result=mysqli_query($con,$sql);
	if($result){
			$query = "SELECT * FROM  users WHERE email='$email' && password='$password' ";
			$data = mysqli_query($con,$query );
			$total = mysqli_num_rows($data);
			if($total){
				$data1=mysqli_fetch_assoc($data);
	$id=$data1['id'];
	$_SESSION['uid']=$id;
		header('location:dashboard.php');
	}
}
}
?>
