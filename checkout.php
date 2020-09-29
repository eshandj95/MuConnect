<?php
session_start();
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$city = $_POST['city'];
$state = $_POST['state'];
$code = $_POST['code'];
$country = $_POST['country'];
$rname = $_POST['rname'];
$phone = $_POST['phone'];
$email = $_SESSION['email'];
$oid = $_SESSION['oid'];
$qyt0 = $_SESSION['qty0'];
$qyt1 = $_SESSION['qty1'];
$qyt2 = $_SESSION['qty2'];
$amount = $_SESSION['amount'];
$con = mysqli_connect('localhost','netchfyb_dheeraj','9449019882Dj1$');
mysqli_select_db($con,'netchfyb_netchronix');
$sql = "INSERT INTO muconnect_orders (id,add1,add2,city,state,code,country,rname,phone,email,amount,android,iphone,typec) VALUES('NULL','$add1','$add2','$city','$state','$code','$country','$rname','$phone','$email','$amount','{$qyt0}','{$qyt1}','{$qyt2}')";
if($add1 !=''&& $city !=''&& $code !=''&& $country !=''&& $rname !=''&& $phone !=''){
$result = mysqli_query($con,$sql) or die("<b>Error<b>" . mysql_error());
        header("Location: thanks.html");
}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>MuConnect</title>
</head>
<body>
<div class="logo">
        <img src="connect.png">
    </div>
    <div class="sec1">';

<?php
$email = $_SESSION['email'];
$oid = $_SESSION['oid'];
$qyt0 = $_SESSION['qty0'];
$qyt1 = $_SESSION['qty1'];
$qyt2 = $_SESSION['qty2'];
$amount = $_SESSION['amount'];


echo '<h1 style="color:white;">Your Selection : </h1>';
echo '<ul class="detail">';
echo '<li>Android Pins : '.$qyt0.'</li>';
echo '<li>Iphone Pins : '.$qyt1.'</li>';
echo '<li>Type C Pins : '.$qyt2.'</li>';
echo '</ul><br><br>';

?>

<h2 class="pls">Please fill in the form to place your order</h2>
<form method="post" action="">
	<input type="text" name="add1" placeholder="Address 1: *" required>
	<input type="text" name="add2" placeholder="Address 2:">
	<input type="text" name="city" placeholder="City: *" required>
	<input type="text" name="state" placeholder="State/Province: *" required>
	<input type="text" name="code" placeholder="Zip Code/ Pin Code: *" required>
	<input type="text" name="country" placeholder="Country: *" required>
	<input type="text" name="rname" placeholder="Recepient Name: *" required>
	<input type="text" name="phone" placeholder="Phone: *" required><br><br><br>
	<input type="submit" name="" >


</form>
</div>
</body>
</html>