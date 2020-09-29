<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
jQuery(document).ready(function(){
        // This button will increment the value
        $('.qtyplus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            fieldName = $(this).attr('field');
            // Get its current value
            var currentVal = parseInt($('input[name='+fieldName+']').val());
            // If is not undefined
            if (!isNaN(currentVal)) {
                // Increment only if value is < 20
                if (currentVal < 20)
                {
                  $('input[name='+fieldName+']').val(currentVal + 1);
                  $('.qtyminus').val("-").removeAttr('style');
                }
                else
                {
                  $('.qtyplus').val("+").css('color','#aaa');
                  $('.qtyplus').val("+").css('cursor','not-allowed');
                }
            } else {
                // Otherwise put a 0 there
                $('input[name='+fieldName+']').val(1);

            }
        });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one only if value is > 1
            $('input[name='+fieldName+']').val(currentVal - 1);
             $('.qtyplus').val("+").removeAttr('style');
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(1);
            $('.qtyminus').val("-").css('color','#aaa');
            $('.qtyminus').val("-").css('cursor','not-allowed');
        }
    });
});
</script>
	<title>MuConnect | Step 1</title>
</head>
<body>
<div class="logo">
		<img src="connect.png">
	</div>
	<div class="sec1">
<?php
error_reporting(E_ERROR | E_PARSE);
$_SESSION['oid']   = $_GET['oid'];
$oid = $_SESSION['oid'];
$email = $_SESSION['email'];
$con = mysqli_connect('localhost','netchfyb_dheeraj','9449019882Dj1$');
mysqli_select_db($con,'netchfyb_netchronix');
$sql = "SELECT * FROM muconnect WHERE OrderId = $oid ";
$result = mysqli_query($con,$sql);
 while($row = mysqli_fetch_array($result)) {

echo '<h2>A few Details About Your Order</h2>';
echo '<ul class="detail">';
echo '<li>Order No : '.$row['OrderId'].'</li>';
echo '<li>Amount : '.$row['Amount'].'</li>';
echo '<li>Shipping Charges : $6</li><br><br><br><br>';
$_SESSION['amount'] = $row['Amount'];
$amount = $_SESSION['amount'];

}
$sql1 = "SELECT * FROM perks WHERE amount = '$amount' ";
$result1 = mysqli_query($con,$sql1) or die("<b>Error<b>" . mysql_error());
 while($row1 = mysqli_fetch_array($result1)) {
    echo '<h1 style="color:#c6c6c6;">You are eligible for '.$row1['quantity'].' pin(s)</h1>';
    $_SESSION['quantity'] = $row1['quantity'];
    $quantity = $_SESSION['quantity'];
}

?>
<h2 class="pls">Please select your combination of pins</h2>
<form method="GET" action="submit.php">
	<h3 style="color: white;">Android Pins</h3>
	<img src="101.png"><br>
    <input type='button' value='-' class='qtyminus' field='quantity0' style="font-weight: bold; outline: none;" />
    <input type='text' name='quantity0' value='0' class='qty' style="margin-bottom: 0px !important" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
    <input type='button' value='+' class='qtyplus' field='quantity0' style="font-weight: bold;" /><br><br><br>

	<h3 style="color: white;">Iphone Pins</h3>
	<img src="102.png"><br>
    <input type='button' value='-' class='qtyminus' field='quantity1' style="font-weight: bold; outline: none;" />
    <input type='text' name='quantity1' value='0' class='qty' style="margin-bottom: 0px !important" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
    <input type='button' value='+' class='qtyplus' field='quantity1' style="font-weight: bold;" /><br><br><br>
    
	<h3 style="color: white;">Type C Pins</h3>
	<img src="103.png"><br>
    <input type='button' value='-' class='qtyminus' field='quantity2' style="font-weight: bold; outline: none;" />
    <input type='text' name='quantity2' value='0' class='qty' style="margin-bottom: 0px !important" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
    <input type='button' value='+' class='qtyplus' field='quantity2' style="font-weight: bold;" /><br><br><br>
<br><br>



<input type="submit" name="" value="Check">

</form>
</div>
</body>
</html>