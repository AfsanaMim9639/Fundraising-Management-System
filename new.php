

<style>
.body{
	width:70%;
}
label{
	font-weight: bold;
}
form{
	margin-top: 20px;
	margin-left: 10px;
}
.datatable{
	margin: 0 auto;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
	margin-left:140px;
	
	
}

td, th {
    border: 1px solid #00004d;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.h1{
	background-color: #00004d;
	height:100px;
	text-align: center;
	color:white;
	
}
th{
	text-align: center;
}
</style>


<?php 
$db= mysqli_connect('localhost', 'root', '', 'project' );//connnect database



//insert
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
	
	$sql="INSERT INTO mim1 (yname, yemail, ypassword, yphone, fname, lname, card, code, country, address,state, zip) 
			VALUES ('$yname', '$yemail', '$ypassword', '$yphone','$fname', '$lname', '$card','$code','$country','$address', '$state', '$zip')";
	mysqli_query($db, $sql);
}


//update
if(isset($_POST['update'])){
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
	$sql="INSERT INTO mim1 (yname, yemail, yphone, card, code, country, address,state, zip) 
			VALUES ('$yname', '$yemail', '$yphone', '$card','$code','$country','$address', '$state', '$zip')";
	mysqli_query($db, $sql);
}

//delete
if(isset($_REQUEST['delid'])){
	
	$delid=$_REQUEST['delid'];
	mysqli_query($db,"delete from mim1 where id='$delid'");
}	
?>

<body>

<div class="h1"><h1>Donar List</h1><div>

<br><hr><br>
<div class="datatable">

	<?php 
	
$sqlget="SELECT * FROM mim1";
$sqldata= mysqli_query($db, $sqlget);
	?>
	<table border="1">
		<tr><tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Card Number</th>
			<th>Security Code</th>
			<th>Country</th>
			<th>Address</th>
			<th>Action</th>
			
		</tr>
		</tr>

		<?php
		while ($row = mysqli_fetch_array($sqldata)) { ?>
		<tr>
			<?php echo "<td>" . $row['id'] . " </td>"; ?>
			<?php echo "<td>" . $row['yname'] . " </td>"; ?>
			<?php echo "<td>" . $row['yemail'] . " </td>"; ?>
		    <?php echo "<td>" . $row['yphone'] . " </td>"; ?>
			<?php echo "<td>" . $row['card'] . " </td>"; ?>
		    <?php echo "<td>" . $row['code'] . " </td>"; ?>
			<?php echo "<td>" . $row['country'] . " </td>"; ?>
		    <?php echo "<td>" . $row['address'] . " </td>"; ?>
		    <?php echo "<td><a href=new.php?delid=".$row['id'].">Delete</a></td>"; ?>
				
		
		</tr>
		<?php } ?>
	</table>
	</div>
</diV>
</body>