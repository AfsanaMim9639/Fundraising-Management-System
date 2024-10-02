

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
    border: 1px solid #622569;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.h1{
	background-color: #622569;
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
	$group1=($_POST['group1']);
	$total=($_POST['total']);
	$start=($_POST['start']);
	$end=($_POST['end']);
	$workname=($_POST['workname']);
	
	
}



//delete
if(isset($_REQUEST['delid'])){
	
	$delid=$_REQUEST['delid'];
	mysqli_query($db,"delete from mim5 where id='$delid'");
}	
?>

<body>

<div class="h1"><h1>Time Sheet</h1><div>

<br><hr><br>
<div class="datatable">

	<?php 
	
$sqlget="SELECT * FROM mim5";
$sqldata= mysqli_query($db, $sqlget);
	?>
	<table border="1">
		<tr><tr>
			<th>ID</th>
			<th>Username</th>
			<th>Group-Name</th>
			<th>Time-start</th>
			<th>Time-end</th>
			<th>Work Name</th>
			<th>Action</th>
			
		</tr>
		</tr>

		<?php
		while ($row = mysqli_fetch_array($sqldata)) { ?>
		<tr>
			<?php echo "<td>" . $row['id'] . " </td>"; ?>
			<?php echo "<td>" . $row['username'] . " </td>"; ?>
			<?php echo "<td>" . $row['group1'] . " </td>"; ?>
		    <?php echo "<td>" . $row['start'] . " </td>"; ?>
			<?php echo "<td>" . $row['end'] . " </td>"; ?>
		    <?php echo "<td>" . $row['workname'] . " </td>"; ?>
			
		    <?php echo "<td><a href=timedis.php?delid=".$row['id'].">Delete</a></td>"; ?>
				
		
		</tr>
		<?php } ?>
	</table>
	</div>
</diV>
</body>