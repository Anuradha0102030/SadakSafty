<?php 


session_start();

$con = mysqli_connect('localhost','root');

// if($con){
// 	echo "connected";
// }else{

// 	echo "not connected";
// }

mysqli_select_db($con,'safe_drive');

$name =$_POST['username'];
$email =$_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM  login_data WHERE name ='$name' && email= '$email' && password ='$password'";



$result = mysqli_query($con,$query);

$num = mysqli_num_rows($result);

if ($num ==1){

	//echo "email id Already registered";
	//$_SESSION['username']=$name;

	
	header('location:index.php');
}else{

	$create = "INSERT INTO login_data(name, email, password) value('$name', '$email','$password')";

	mysqli_query($con,$create);

	header('location:index.php');

}

  

?>