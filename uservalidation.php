<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userlogin1');
$name = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$gender = $_POST['gender'];


$s = " select * from user where name='$name' && password='$pass'";

$result = mysqli_query($con, $s); 

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username']=$name;
	header('location:home.php');
}
else{
	header('loacation:index.php');
	mysqli_query($con, $reg);
	echo "Login UnSuccessful";
}


?>