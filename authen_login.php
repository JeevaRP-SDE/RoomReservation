<?php  /*
echo "s";
 include('db_connect.php');
echo "s";
if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = 'mashlog';
$password = 'Password@123';

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user_login` WHERE username='$username' and Password='$password'";

if($query){
	echo "s";
}
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

echo "Login Credentials verified";
//echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

}else{
//echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
echo "Invalid Login Credentials";
}
}
*/

include("config.php");

if(isset($login))
{
	$email=isset($_POST["email"]);
$Password=isset($_POST["Password"]);
	if($email=="" || $Password=="")
	{
	$error= "<h3 style='color:red'>fill all details</h3>";	
	}		
	else
	{
	$sql=mysqli_query($con,"select * from admin where username='$email' && Password='$Password' ");
		if(mysqli_num_rows($sql))
		{
			
		header('location:Reservation.html');	
		}
		else
		{
		$error= "<h3 style='color:red'>Invalid login details</h3>";	
		}	
	}
}
?>