<?php 
 include('config.php');
 if (isset($_POST['login'])){
if (isset($_POST['email']) and isset($_POST['Password'])){
	
// Assigning POST values to variables.
$username =$_POST['email'];
$password =$_POST['Password'];
if($username=="" && $Password=="")
{
	echo "<script type='text/javascript'>alert('Please Enter Username and Password')</script>";
}
else{

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `admin` WHERE username='$username' and Password='$password'";


$result = mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));
$count = mysqli_num_rows($result);

if ($count == 1){
header('location:adminhome.php');
}
else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";

}
}
 }
 }
 ?>

<?php 
 include('config.php');
 
 if (isset($_POST['login2']))
 {
	 header('location:forgot.php');
 }
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="css/main.css">

</head>

<body>
    <div class="container">
	<div class="wrapper">
        <h1><b>Welcome To Hotel Reservation</b></h1>

          <form id="login-form" class="login-form" name="form1" method="post">

                 <input id="email" name="email" class="required" type="email" placeholder="Email">
                <input id="Password" name="Password" class="required" type="Password" placeholder="Password">
               <div class="row"><button type="submit" name="login" id="login" >LogIn</button></div>&nbsp;		   
			    <div class="row"><button type="submit" name="login2" id="login" >Forgot Password</button></div>&nbsp;
				</form> 
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
</div>

	</body>
</html>
