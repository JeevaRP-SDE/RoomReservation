<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Hotel Reservation Form</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main1.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
	<form id="booking-form" class="booking-form" name="form1" method="post" action="">
            <div align="center"><img class="logo" src="img/example_logo.png" title="Example Logo" alt="Example Logo"></div>
            <div class="h1">Hotel Room Pass</div>
            <div id="form-message" class="message hide">
                Thank you for your enquiry!
            </div>
	<div id="form-content">
	<div class="group">
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server witd default setting (user 'root' witd no password) */

// Check connection

 include('config.php');
 if (isset($_POST['login'])){
	 
	 $email=$_POST['email'];
// Attempt select query execution
$sql = "SELECT * FROM room where email='$email'";
if($result = mysqli_query($mysqli, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
        while($row = mysqli_fetch_array($result)){
           
                echo "<tr><td>From_Date</td><td>:</td><td>" . $row['fromdate'] . "</td></tr>";
                echo "<tr><td>To_Date</td><td>:</td><td>" . $row['todate'] . "</td></tr>";
                echo "<tr><td>Room_Type</td><td>:</td><td>" . $row['roomtype'] . "</td></tr>";
                echo "<tr><td>Room_Requirements</td><td>:</td><td>" . $row['roomreq'] . "</td></tr>";
            echo "<tr><td>No_of_adult</td><td>:</td><td>" . $row['adult'] . "</td></tr>";
			echo "<tr><td>No_of_child</td><td>:</td><td>" . $row['child'] . "</td></tr>";
			echo "<tr><td>Full_Name</td><td>:</td><td>" . $row['name'] . "</td></tr>";
			echo "<tr><td>E-MAIL</td><td>:</td><td>" . $row['email'] . "</td></tr>";
			echo "<tr><td>Mobile</td><td>:</td><td>" . $row['phone'] . "</td></tr>";
			echo "<tr><td>Special_Requirements</td><td>:</td><td>" . $row['spreq'] . "</td></tr>";
			
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } 
	else{
        echo "No records matching your query were found.";
    }
} 
 }

?>
</div>
</div>
            <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
        </form>
</body>
</html>