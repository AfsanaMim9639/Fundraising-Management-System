
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
	$query = "INSERT INTO january (projectname, placename, startdate,enddate, volun, hour, total) VALUES ('$projectname','$placename','$startdate','$enddate','$volun','$hour','$total')";
    mysqli_query($connect, $query);
            
	
}



//delete
if(isset($_REQUEST['delid'])){
	
	$delid=$_REQUEST['delid'];
	mysqli_query($db,"delete from january where id='$delid'");
}




//Search for a results;


?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.body{
	width:70%;
}
label{
	font-weight: bold;
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
	margin-left:140px;
	
	
}

td, th {
    border: 1px solid #803300;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.h1{
	background-color: #803300;
	height:100px;
    text-align:center;
	color:white;
	
}
th{
	text-align: center;
}
.search{
	text-align:left;
	margin-top:-5px;
}
.searchin{
	width:30%;
	height:35px;
	border: 1px solid #00004d;
	font-size: 17px;
}
.search button {
  
  height:35px;
  width:5%;
  background: #00004d;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
border-radius:10%;
}

.search button:hover {
  background: #0b7dda;
}

</style>


</head>

<body>
<form action="" method="post">
<div class="h1"><h1>June's Project List</h1><div>

<br><hr><br>
<div class="datatable">
	       
	<br>
	<?php
	
	$query = "SELECT * FROM january WHERE startdate AND enddate between  '2018-06-01' AND '2018-06-31'";
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
			
		    <?php echo "<td><a href=june.php?delid=".$row['id'].">Delete</a></td>"; ?>
				
		
		</tr>
		<?php } ?>
	</table>
	
	
	

	</div>
</diV>
</form>
</body>