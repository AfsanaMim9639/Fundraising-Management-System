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
 
.h1{
	
	text-align:center;
	background:#667292;
	height:70px;
	
	color:white;
	
}

.pro-footer{
background:#667292;	
height:400px;
	
}

.src{
	
	height:50px;
	background:#F0F0F0;
	margin-top:-15px;
	
}

search{
	text-align:right;
	margin-top:-50px;
	
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

ul{
   
}
ul li{
    background-color:green ;
    width: 130px;
    height: 25px;
    float: left;
    line-height: 30px;
    font-size:20px;
	border-left:2px solid white;
    text-align: center;
    list-style-type: none;
    opacity: 0.9;
	padding:10px 0px;
}

ul li a{
    color: white;
    text-decoration: none;
    display: block;
	
}


ul li ul li{
    display: none;
	width: 130px;
    height:20px;
	background-color: #00004d;
	margin-left:-42px;
	margin-top:px;
}
ul li ul li a{
	
	color:black;
}
ul li:hover ul li{
    display: block;
	background:white;
	border:1px solid grey;
}

label{
	font-weight: bold;
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	
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

</style>

</head>
<body>
<form>

<h1 class="h1">Projects</h1>
<div class="src">




    <div class="search">
	<input type="text" name="valueToSearch" placeholder="Search Here........" class="searchin">
    <button type="submit" name="search" class="butn"><i class="fa fa-search"></i></button>
     </div><br><hr>

</div>
<div>
<h1 style="color:#989898">Projects List</h1>
</div>
<div class="sidebar" style="float:left;margin-left:150px;margin-top:-75px">
  <ul>
    <li><a href="newproject.php">New Project <i class="fa fa-plus"></i></a></li>
	
	<li style="background:white;"><a href="newproject.php" style="color:black; border:1px solid black">Category &#9662;</a>
	<ul>
	<li><a href="newproject.php">Complete Project </a></li>
	<li><a href="newproject.php">Pending Project </a></li>
	
	</ul>
	
	</li>
	
	
	</ul>
</div>


<br><hr>

<form action="" method="post">
<div style="opacity:0.9" class="h1"><h1>All Project</h1><div>


<div class="datatable">

	<br>
	<?php 
    $query = "SELECT * FROM `january`";
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