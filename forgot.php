<?php 
 include('config.php');

 if (isset($_POST['login'])){
if (isset($_POST['email'])){
	
// Assigning POST values to variables.
$username =$_POST['email'];

$query = "SELECT Password FROM `admin` WHERE username='$username'";


$result = mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));
$Password=$result;

if ($result)
{
	echo "<script type='text/javascript'>alert('$Password')</script>";
}
else{
echo "<script type='text/javascript'>alert('Enter valid mail!!!')</script>";

}
}
 }
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/main.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>
    <style class="cp-pen-styles">
    </style>
</head>

<body>
 

    <div class="container">
	<div class="wrapper">
        <h1>Enter your mail to Get Password</h1>
       
            <form id="login-form" class="login-form" name="Forgot" method="post">
                
                <input id="email" name="email" class="required" type="email" placeholder="Email">
				<tr>
               <td><div class="row"><button type="submit" name="login" id="login" >Get Password</button></div></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            		
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
