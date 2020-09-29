<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>MuConnect | Step 1</title>
</head>
<body>
<div class="logo">
		<img src="connect.png">
	</div>
	<div class="sec1">
<?php
$_SESSION['email'] = $_GET['email'];
$email = $_SESSION['email'];
$con = mysqli_connect('localhost','netchfyb_dheeraj','9449019882Dj1$');
mysqli_select_db($con,'netchfyb_netchronix');
$sql = "SELECT * FROM muconnect WHERE Email = '$email' GROUP BY Email";
$result = mysqli_query($con,$sql) or die("<b>Error<b>" . mysql_error());
while($row = mysqli_fetch_array($result)) {
echo '<h1 class="name">Hello '.$row['Name'].'!</h1>';
echo '<h2>Please select your order :</h2>';
$amount = $row['Amount'];
}
$sql1 = "SELECT * FROM muconnect WHERE Email = '$email' ";
$result1 = mysqli_query($con,$sql1) or die("<b>Error<b>" . mysql_error());
while ($row1 = mysqli_fetch_array($result1)) {
echo '<ul class="detail">';
$orderno = $row1["OrderId"];
echo '<li><a href="step1.php?oid='.$orderno.'">'.$row1['OrderId'].'</a></li>';
echo '</ul>';
}
?>

</div>
</body>
</html>