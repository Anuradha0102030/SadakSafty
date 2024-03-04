<?php 


session_start();

if(isset($_SESSION['user'])){
	header('location:login.php');
}

$con = mysqli_connect('localhost','root');

// if($con){
// 	echo "connected";
// }else{

// 	echo "not connected";
// }

mysqli_select_db($con,'safe_drive');
 
$name = $_POST['username'];

$password = $_POST['password'];

$sel = " SELECT * FROM  login_data WHERE name ='$name'  &&  password ='$password' ";



$result = mysqli_query($con,$sel);

$num = mysqli_num_rows($result);






if ($num == 1){
	$_SESSION['user'] = $name;

	header('location:home.php');
}else{
 
	header('location:login.php');

}

  

?>