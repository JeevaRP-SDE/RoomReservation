<?php 
 include('config.php');

if (isset($_POST['type'])){
	$type=$_POST['type'];
	if($type=="0"){
 	echo "<script type='text/javascript'>alert('Please select user type')</script>";
	}
}
 ?>
<?php 
 include('config.php');

if (isset($_POST['type'])){
	$type=$_POST['type'];
	if($type=="1"){
 header('location:admin.php');
	}
}
 ?>
 <?php 
 include('config.php');
 if (isset($_POST['type'])){
	$type=$_POST['type'];
	if($type=="2"){
  header('location:Login.php');
	}
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
		 <form id="login-form" class="login-form" name="form2" method="post">
		 <div class="row"> <div class="col-md-6"><label for="type"><b>Choose Type:</b></label>
 <select name="type" id="type" method="post" onChange="form.submit()">
 <option value="0">Select User Type</option>
 <option value="1">ADMIN</option>
 <option value="2">USER</option>
 </select></div></div>
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
