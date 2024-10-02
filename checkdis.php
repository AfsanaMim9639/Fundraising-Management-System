

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
    border: 1px solid #c94c4c;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.h1{
	background-color: #c94c4c;
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
if(isset($_POST['submit'])){
	
	
	$username=($_POST['username']);
	$email=($_POST['email']);
	$phone=($_POST['phone']);
	$check1=($_POST['check1']);
	$check2=($_POST['check2']);
	
}



//delete
if(isset($_REQUEST['delid'])){
	
	$delid=$_REQUEST['delid'];
	mysqli_query($db,"delete from mim4 where id='$delid'");
}	
?>

<body>

<div class="h1"><h1>Time Sheet</h1><div>

<br><hr><br>
<div class="datatable">

	<?php 
	
$sqlget="SELECT * FROM mim4";
$sqldata= mysqli_query($db, $sqlget);
	?>
	<table border="1">
		<tr><tr>
			<th>ID</th>
			<th>Username</th>
			<th>Email</th>
			<th>Phone number</th>
			<th>Project Interest</th>
			<th>Availability</th>
			<th>Action</th>
			
		</tr>
		</tr>

		<?php
		while ($row = mysqli_fetch_array($sqldata)) { ?>
		<tr>
			<?php echo "<td>" . $row['id'] . " </td>"; ?>
			<?php echo "<td>" . $row['username'] . " </td>"; ?>
			<?php echo "<td>" . $row['email'] . " </td>"; ?>
		    <?php echo "<td>" . $row['phone'] . " </td>"; ?>
			<?php echo "<td>" . $row['check1'] . " </td>"; ?>
		    <?php echo "<td>" . $row['check2'] . " </td>"; ?>
			
		    <?php echo "<td><a href=checkdis.php?delid=".$row['id'].">Delete</a></td>"; ?>
				
		
		</tr>
		<?php } ?>
	</table>
	</div>
</diV>
</body>