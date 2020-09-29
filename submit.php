<?php
session_start();
$amount = $_SESSION['amount'];
$oid = $_SESSION['oid'];
$quantity = $_SESSION['quantity'];
$email = $_SESSION['email'];
$_SESSION['qty0'] =  $_GET['quantity0'];
$_SESSION['qty1'] =  $_GET['quantity1'];
$_SESSION['qty2'] =  $_GET['quantity2'];
$qyt0 = $_SESSION['qty0'];
$qyt1 = $_SESSION['qty1'];
$qyt2 = $_SESSION['qty2'];
$sum = $qyt0 + $qyt1 + $qyt2;

echo '<div class="sec1">';
echo '<h1 class="number">You have selected ' .$sum. ' pins</h1>';


if ($quantity == $sum) {
	echo '<a href="checkout.php?oid='.$oid.'"> Proceed to Checkout</a><br><br>';
	echo '<a href="step1.php?oid='.$_SESSION['oid'].'" style="color:orange;"> Change combination</a>';
}
else if($quantity < $sum){
	echo 'You have selected more number of pins. <a href="step1.php?oid='.$_SESSION['oid'].'"> Go back</a>';
}
else{
	echo 'You have selected less number of pins.<a href="step1.php?oid='.$_SESSION['oid'].'"> Go back</a>';
}
echo '</div>';

$con = mysqli_connect('localhost','netchfyb_dheeraj','9449019882Dj1$');
mysqli_select_db($con,'netchfyb_netchronix');
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link rel="stylesheet" type="text/css" href="style4.css">
	<title>Step 2</title>
</head>
<body>

</body>
</html>