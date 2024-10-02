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
<style>
 body{
	 background:#f0f5f5;
   
}
ul li{
    background-color:#334d4d ;
    width: 110px;
    height: 25px;
    float: left;
    line-height: 30px;
    font-size:20px;
	border-left:2px solid white;
    text-align: center;
    list-style-type: none;
    border-radius:10px 10px;
	padding:10px 0px;
	margin-top:-10px;
}

ul li a{
    color: white;
    text-decoration: none;
    display: block;
	
}



h1{
	
	text-align:center;
	background:#330000;
	height:60px;
	margin-left:-30px;
	color:white
	
}
label{
	font-weight: bold;
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width:100%;
	margin-top:40px;
	
	
}

td, th {
    border: 1px solid #c65353;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.h1{
	background-color: #c65353;
	height:100px;
    text-align:center;
	color:white;
	
}
th{
	text-align: center;
}
</style>

</head>
<body>
<form>
<h1>Complete Project</h1>
<div class="sidebar">
  
  
  <ul>
    <li><a href="januarydis.php">January </a></li>
	<li><a href="february.php">February </a></li>
	<li><a href="march.php">March </a></li>
	<li><a href="april.php">April</a></li>
	<li><a href="may.php">May </a></li>
	<li><a href="june.php">June  </a></li>
	<li><a href="july.php">July  </a></li>
	<li><a href="august.php">August  </a></li>
	<li><a href="september.php">September </a></li>
	<li><a href="october.php">October</a></li>
	<li><a href="november.php">November </a></li>
	<li><a href="december.php">December</a></li>
  </ul>
</div>

</form>
<form action="" method="post">


<div class="datatable">

	<br>
	<?php 
    $query = "SELECT * FROM `january` WHERE status=1";
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


<script>
 function show(){}

</script>
</body>

</html>