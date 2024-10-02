
<?php 
$db= mysqli_connect('localhost', 'root', '', 'project' );//connnect database



//insert
if(isset($_POST['submit'])){
	
	
	       $username=($_POST['username']); 
		   $email=($_POST['email']);
		   $phone=($_POST['phone']);
		   $gender=($_POST['gender']);
           $experience=($_POST['experience']);
      
           $for_query = '';
		   $for_quer = '';
            
	
}



//delete
if(isset($_REQUEST['delid'])){
	
	$delid=$_REQUEST['delid'];
	mysqli_query($db,"delete from mim4 where id='$delid'");
}




//Search for a results;
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    

$query = "SELECT * FROM mim4 WHERE CONCAT(`id`, `username`, `email`, `phone`, `check1`, `check2`, `gender`, `experience`) LIKE '%".$valueToSearch."%'";
$search_result = mysqli_query($db, $query);
    
}
 else 
    $query = "SELECT * FROM mim4";
    $search_result = mysqli_query($db, $query);



?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.body{
	width:100%;
}
label{
	font-weight: bold;
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
	margin-left:150px;
	
}

td, th {
    border: 1px solid #800040;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.h1{
	background-color: #800040;
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

td input {
	border:1px solid white;
	font-size:17px;
}
tr input:nth-child(even) {
    background:1px solid #dddddd;
}
</style>


</head>

<body>
<form action="" method="post">
<div class="h1"><h1>Volunteer List</h1><div>

<br><hr><br>

<div class="newpro">
<div class="search">
	<input type="text" name="valueToSearch" placeholder="Search Here........" class="searchin">
    <button type="submit" name="search" class="butn"><i class="fa fa-search"></i></button>
     </div>
<div class="sidebar" style="float:right;margin-right:550px;margin-top:-45px">
  <ul>
    <li><a href="check.php">Add Volunteer <i class="fa fa-plus"></i></a></li>
	</ul>
	</div>
	 
	 	</div>
<div class="datatable">
	       
	<br>
	
	<table border="1">
		<tr><tr>
			<th>ID</th>
			<th>Username</th>
			<th>email</th>
			<th>Phone</th>
			<th>Volunteer Project Interest</th>
			<th>Volunteer Availability</th>
			<th>Gender</th>
			<th>Past Volunteer Experience</th>
			
			<th colspan="2">Action</th>
			
		</tr>
		</tr>

		<?php
		while ($row = mysqli_fetch_array($search_result)) { ?>
		<tr>
			<?php echo "<td>" . $row['id'] . " </td>"; ?>
			<?php echo "<td>" . $row['username'] . " </td>"; ?>
			<?php echo "<td>" . $row['email'] . " </td>"; ?>
		    <?php echo "<td>" . $row['phone'] . " </td>"; ?>
			<?php echo "<td>" . $row['check1'] . " </td>"; ?>
		    <?php echo "<td>" . $row['check2'] . " </td>"; ?>
			<?php echo "<td>" . $row['gender'] . " </td>"; ?>
		    <?php echo "<td>" . $row['experience'] . " </td>"; ?>
			
		    <?php echo "<td><a href=volundisplay.php?delid=".$row['id'].">Delete</a> </td>"; ?>
			<?php echo	"<td><a href='volunupdate.php?id=$row[id]&username=$row[username]&email=$row[email]&phone=$row[phone]&gender=$row[gender]&experience=$row[experience]'>Edit</a></td>";

			?>
				
		
		</tr>
		<?php } ?>
	</table>
	
	
	

	</div>
</diV>
</form>
</body>