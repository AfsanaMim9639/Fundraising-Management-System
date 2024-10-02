<?php
//connect with mysql
header("refresh:1; url=update1.php");
$connect = mysqli_connect("localhost", "root", "", "project");

//Update Query

$query = "UPDATE `users` SET name='$_POST[name]' ,amount='$_POST[amount]' ,city='$_POST[city]' WHERE id='$_POST[id]'";


//Execute the query

if(mysqli_query($connect,$query))
	
 else
	 echo "Not Updated";

?>