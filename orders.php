<meta http-equiv="refresh" content="30">
<?php
$con = mysqli_connect('localhost','netchfyb_dheeraj','9449019882Dj1$');
mysqli_select_db($con,'netchfyb_netchronix');
$sql0 = "SELECT SUM(android) AS and_value FROM muconnect_orders";
$result0 = mysqli_query($con,$sql0); 
$row0 = mysqli_fetch_assoc($result0); 
$sum0 = $row0['and_value'];
echo '<h1>Total Android Pins : ' .$sum0. '</h1>';
$sql0 = "SELECT SUM(iphone) AS i_value FROM muconnect_orders";
$result0 = mysqli_query($con,$sql0); 
$row0 = mysqli_fetch_assoc($result0); 
$sum1 = '<h1>Total Iphone Pins : ' .$row0['i_value']. '</h1>' ;
echo $sum1;
$sql0 = "SELECT SUM(typec) AS c_value FROM muconnect_orders";
$result0 = mysqli_query($con,$sql0); 
$row0 = mysqli_fetch_assoc($result0); 
$sum2 = '<h1>Total TypeC Pins : ' .$row0['c_value']. '</h1>';
echo $sum2;
echo '<hr>';
$sql = "SELECT * FROM muconnect_orders ORDER BY id DESC";
$result = mysqli_query($con,$sql) or die("<b>Error<b>" . mysql_error());
while($row = mysqli_fetch_array($result)) {
	echo '<h3>Order id : '.$row['id'].'</h3>';
	echo '<h3> Address 1 : '.$row['add1'].'</h3>';
	echo '<h3> Address 2 : '.$row['add2'].'</h3>';
	echo '<h3> City : '.$row['city'].'</h3>';
	echo '<h3> State : '.$row['state'].'</h3>';
	echo '<h3>Pin Code : '.$row['code'].'</h3>';
	echo '<h3> Country : '.$row['country'].'</h3>';
	echo '<h3> Recipient Name : '.$row['rname'].'</h3>';
	echo '<h3> Phone : '.$row['phone'].'</h3>';
	echo '<h3> Email : '.$row['email'].'</h3>';
	echo '<h3> Amount : '.$row['amount'].'</h3>';
	echo '<h3> Android Pins : '.$row['android'].'</h3>';
	echo '<h3> Iphone Pins : '.$row['iphone'].'</h3>';
	echo '<h3> Type C Pins : '.$row['typec'].'</h3>';
	echo '<hr>';

	}
?>