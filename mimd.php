<?php
$yname="";
$yemail="";
$ypassword="";
$yphone="";

$fname="";
$lname="";
$card="";
$code="";
$country="";
$address="";
$state="";
$zip="";
$errors=array();
//connect databse
$db=mysqli_connect('localhost', 'root', '', 'project');
//from validation
if(isset($_POST['submit1'])){
	$yname=($_POST['yname']);
	$yemail=($_POST['yemail']);
	$ypassword=($_POST['ypassword']);
	$yphone=($_POST['yphone']);
	$fname=($_POST['fname']);
	$lname=($_POST['lname']);
	$card=($_POST['card']);
	$code=($_POST['code']);
	$country=($_POST['country']);
	$address=($_POST['address']);
	$state=($_POST['state']);
	$zip=($_POST['zip']);
	
	
//Insert data;
if(count($errors)==0){
$query="INSERT INTO mim1 (yname, yemail, ypassword, yphone, fname, lname, card, code, country, address,state, zip) 
			VALUES ('$yname', '$yemail', '$ypassword', '$yphone','$fname', '$lname', '$card','$code','$country','$address', '$state', '$zip')";
mysqli_query($db, $query);
}
}



?>

<html>

<head>

<link rel="stylesheet" type="text/css" href="style.css">

<style>

.container{
	width:90%;
	margin-left:50px;
}
.container input,label{
	font-size:20px;
}
</style>

</head>

<body class="body">

<div class="mimhead">

<h2 class="h2">DONATE NOW</h2>
</div>

<br>
<form action="" method="post">




  <div class="container">
    <h2 style="text-align:center">Your Information</h2>
	<br>
    <p style="color:red;font-size:20px">Please fill in this form .</p>
    <hr>
     <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="yname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="yemail" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="ypassword" required>

    <label for="psw-repeat"><b>Phone Number</b></label>
    <input type="password" placeholder="Enter Phone number" name="yphone" required>
    <hr>
    
    
    <h2 style="text-align:center">Payment Details</h2>

     <hr>
     <label for="email"><b>Name of the card</b></label>
    <input type="text" placeholder="First Name" name="fname" required>
    <input type="text" placeholder="Last Name" name="lname" required>

    <label for="email"><b>Card Number</b></label>
    <input type="text" placeholder="Enter Card Number" name="card" required>

    <label for="psw"><b>Security Code</b></label>
    <input type="password" placeholder="Enter Security Code" name="code" required>

    <label for="psw-repeat"><b>Country</b></label>
    <input type="password" placeholder="Enter Country" name="country" required>
    <label for="psw-repeat"><b>Address</b></label>
    <input type="password" placeholder="Enter Address" name="address" required>
    
	<label for="psw-repeat"><b>State & Zip</b></label>
    <input type="password" placeholder="Enter Country" name="state" required>
    <input type="password" placeholder="Enter Zip" name="zip" required>
    
	
	
	
	<hr>
	<button type="submit" class="registerbtn" name="submit1">Give Now</button>
 
 </div>
  
  
</form>


</body>
</html>