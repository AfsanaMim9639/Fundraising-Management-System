
<?php 
$db= mysqli_connect('localhost', 'root', '', 'project' );//connnect database



//insert
if(isset($_POST['submit'])){
	
	
	       $placename=($_POST['placename']); 
			$volun=($_POST['volun']);
			$total=($_POST['total']);
            
			$start=($_POST['start']);
			$end=($_POST['end']);
            $datalist=($_POST['datalist']);
            $amount=($_POST['amount']);
			$goal=($_POST['goal']);
            $money=($_POST['money']);

            
	
}



//delete
if(isset($_REQUEST['delid'])){
	
	$delid=$_REQUEST['delid'];
	mysqli_query($db,"delete from mim5 where id='$delid'");
}




//Search for a results;
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `mim5` WHERE CONCAT(`id`, `placename`, `volun`, `total`, `start`, `end`, `datalist`, `amount`, `goal`, `money`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `mim5`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{     $connect = mysqli_connect("localhost", "root", "", "project");

     $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

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
    border: 1px solid #990073;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #ffe6f9;
}
.h1{
	background-color: 	#990073;
	height:100px;
    text-align:center;
	color:white;
	
}
th{
	text-align: center;
}
.search{
	text-align:right;
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
.sidebar li a{
	text-decoration:none;
	font-size:25px;
	border:1px solid grey;
	background:#b3cccc;
	color:black;
}
.sidebar li a i{
	color:red
}
.newpro{
	height:50px;
	background:#d9d9d9;
	border-bottom:1px solid black;
}
.sidebar li{
	list-style:none;
}
.sidebar li a:hover{
	background:#99ff99;
}
</style>


</head>

<body>
<form action="" method="post">
<div class="h1"><h1>New Project List</h1><div>

<br><hr><br>
<div class="newpro">
<div class="search">
	<input type="text" name="valueToSearch" placeholder="Search Here........" class="searchin">
    <button type="submit" name="search" class="butn"><i class="fa fa-search"></i></button>
     </div>
<div class="sidebar" style="float:right;margin-right:550px;margin-top:-45px">
  <ul>
    <li><a href="newproject.php">Add Project <i class="fa fa-plus"></i></a></li>
	</ul>
	</div>
	 
	 	</div>
	 
	 <br>
	 
	 <div class="datatable">
	
	<table border="1">
		<tr><tr>
			<th>ID</th>
			<th>Place name</th>
			<th>Volunteer Name</th>
			<th>Total Member</th>
			<th>Time Start</th>
			<th>Time End</th>
			<th>Project Name</th>
			<th>Donation Amount</th>
			<th>Goal</th>
			<th>Total money</th>
			
			<th colspan="2">Action</th>
			
		</tr>
		</tr>

		<?php
		while ($row = mysqli_fetch_array($search_result)) { ?>
		<tr>
			<?php echo "<td>" . $row['id'] . " </td>"; ?>
			<?php echo "<td>" . $row['placename'] . " </td>"; ?>
			<?php echo "<td>" . $row['volun'] . " </td>"; ?>
		    <?php echo "<td>" . $row['total'] . " </td>"; ?>
			<?php echo "<td>" . $row['start'] . " </td>"; ?>
		    <?php echo "<td>" . $row['end'] . " </td>"; ?>
			<?php echo "<td>" . $row['datalist'] . " </td>"; ?>
		    <?php echo "<td>" . $row['amount'] . " </td>"; ?>
			<?php echo "<td>" . $row['goal'] . " </td>"; ?>
		    <?php echo "<td>" . $row['money'] . " </td>"; ?>
			
		    <?php echo "<td><a href=newprodis.php?delid=".$row['id'].">Delete</a></td>"; ?>
			<?php echo	"<td><a href='newupdate.php?id=$row[id]&placename=$row[placename]&volun=$row[volun]&total=$row[total]&start=$row[start]&end=$row[end]&datalist=$row[datalist]&amount=$row[amount]'>Edit</a></td>";

			?>	
		
		</tr>
		<?php } ?>
	</table>
	
	
	

	</div>

</form>
</body>