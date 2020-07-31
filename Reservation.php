<?php
include('config.php');

 if (isset($_POST['insert'])){
$from =$_POST['date-from'];
$to =$_POST['date-to'];
$roomtype=$_POST['room-type'];
$roomreq=$_POST['room-requirements'];
$adult=$_POST['adults'];
$child=$_POST['children'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$spreq=$_POST['special-requirements'];
if($from==" " && $to=" " && $roomtype=" " && $roomreq=" " && $adult=" " && $child=" " && $name=" " && $phone=" " && $email=" ")
{
	echo "<script type='text/javascript'>alert('Please Enter Requirements')</script>";
}
else{
$query1 = "insert into room(fromdate,todate,roomtype,roomreq,adult,child,name,email,phone,spreq) values('$from','$to','$roomtype','$roomreq','$adult','$child','$name','$email','$phone','$spreq')";
$result1 = mysqli_query($mysqli,$query1) or die(mysqli_error($mysqli));
if($result1){

echo "<script type='text/javascript'>alert('Insert Success')</script>";
}

}
 }
 

?>

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
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <form id="booking-form" class="booking-form" name="form1" method="post" action="">
            <div align="center"><img class="logo" src="img/example_logo.png" title="Example Logo" alt="Example Logo"></div>
            <div class="h1">Hotel Reservation Form</div>
            <div id="form-message" class="message hide">
                Thank you for your enquiry!
            </div>
            <div id="form-content">
                <div class="group">
                    <label for="date-from">From</label>
                    <div class="addon-right">
                        <input id="date-from" name="date-from" class="form-control" type="text">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
                <div class="group">
                    <label for="date-to">To</label>
                    <div class="addon-right">
                        <input id="date-to" name="date-to" class="form-control" type="text">
                        <i class="fa fa-calendar"></i>
                    </div>
                </div>
                <div class="group">
                    <label for="room-type">Room type</label>
                    <div>
                        <select id="room-type" name="room-type" class="form-control">
                            <option value="Single room">Single room</option>
                            <option value="Double room">Double room</option>
                            <option value="Apartment">Apartment</option>
                        </select>
                    </div>
                </div>
                
                <div class="group">
                    <label for="room-requirements">Room requirements</label>
                    <div>
                        <select id="room-requirements" name="room-requirements" class="form-control">
                            <option value="No Preference">No Preference</option>
                            <option value="Non Smoking">Non Smoking</option>
                            <option value="Smoking">Smoking</option>
                        </select>
                    </div>
                </div>

             
                
                
                <div class="group">
                    <label for="adults">Adults</label>
                    <div>
                        <select id="adults" name="adults" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>
                <div class="group">
                    <label for="children">Children</label>
                    <div>
                        <select id="children" name="children" class="form-control">
                            <option value="-">-</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>
                <div class="group">
                    <label for="name">Name</label>
                    <div><input id="name" name="name" class="form-control" type="text" placeholder="Name"></div>
                </div>
                <div class="group">
                    <label for="email">Email</label>
                    <div><input id="email" name="email" class="form-control" type="email" placeholder="Email"></div>
                </div>
                <div class="group">
                    <label for="phone">Phone</label>
                    <div><input id="phone" name="phone" class="form-control" type="text" placeholder="Phone"></div>
                </div>
                <div class="group">
                    <label for="special-requirements">Special requirements</label>
                    <div><textarea id="special-requirements" name="special-requirements" class="form-control" cols="" rows="5" placeholder="Special requirements"></textarea></div>
                </div>
                <div class="group submit">
                    <label class="empty"></label>
                    <div><input name="insert" type="submit" value="Submit"/></div>
                </div>
            </div>
            <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
        </form>
    </body>
</html>
