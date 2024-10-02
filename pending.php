<?php 
$db= mysqli_connect('localhost', 'root', '', 'project' );//connnect database



//insert
if(isset($_POST['submit'])){
	
	
	$projectname=($_POST['projectname']);
	$placename=($_POST['placename']);
	$startdate=($_POST['startdate']);
	$enddate=($_POST['enddate']);
	$volun=($_POST['volun']);
	$hour=($_POST['hour']);
	$total=($_POST['total']);
	
	
}



//delete
if(isset($_REQUEST['delid'])){
	
	$delid=$_REQUEST['delid'];
	mysqli_query($db,"delete from january where id='$delid'");
}





	
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
 


h1{
	
	text-align:center;
	background:#330000;
	height:60px;
	
	color:white
	
}
label{
	font-weight: bold;
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width:100%;
	
	
}

td, th {
    border: 1px solid #c65353;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

th{
	text-align: center;
}

.searchin{
	width:55%;
	height:50px;
	border: 1px solid #00004d;
	font-size: 17px;
	border-radius:10px 10px;
	background:#E1E8ED;
}
.search button {
  
  height:50px;
  width:100px;
  background: #00004d;
  color: white;
  font-size: 20px;
  border: 1px solid #330000;
  border-left: none;
  cursor: pointer;
border-radius:10px 10px;
}

.search button:hover {
  background: #0b7dda;
}

</style>

</head>
<body>

<form action="" method="post">
<h1>Pending Project</h1>
<div class="search" style="margin-left:300px;margin-top:-20px;">
	<input type="text" name="valueToSearch" placeholder="Search Here........" class="searchin">
    <button type="submit" name="search" class="butn"><i class="fa fa-search"></i></button>
     </div>
<hr>
<div class="datatable">

	
	<?php 
    $query = "SELECT * FROM `january` WHERE status=0";
    $search_result = mysqli_query($db,$query);
	
	
	?>
	<table border="1">
		<tr><tr>
			<th>ID</th>
			<th>Project Name</th>
			<th>Place Name</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Volunteers</th>
			<th>Hours</th>
			<th>Total Expenses</th>
			
			<th>Action</th>
			
		</tr>
		</tr>

		<?php
		while ($row = mysqli_fetch_array($search_result)) { ?>
		<tr>
			<?php echo "<td>" . $row['id'] . " </td>"; ?>
			<?php echo "<td>" . $row['projectname'] . " </td>"; ?>
			<?php echo "<td>" . $row['placename'] . " </td>"; ?>
		    <?php echo "<td>" . $row['startdate'] . " </td>"; ?>
			<?php echo "<td>" . $row['enddate'] . " </td>"; ?>
		    <?php echo "<td>" . $row['volun'] . " </td>"; ?>
			<?php echo "<td>" . $row['hour'] . " </td>"; ?>
			<?php echo "<td>" . $row['total'] . " </td>"; ?>
			
		    <?php echo "<td><a href=januarydis.php?delid=".$row['id'].">Delete</a></td>"; ?>
				
		
		</tr>
		<?php } ?>
	</table>
	
	
	

	</div>
</diV>
</form>



</body>

</html>