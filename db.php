<?php
//connect to database
$db_host='localhost';
$db_name='project';
$db_user='root';
$db_pass=NULL;

//create mysql object

$mysqli=new mysqli($db_host,$db_user,$db_pass,$db_name);
 
//error handler

if(mysqli_connect_error()){
	echo 'This connection failed',mysqli_connect_error();
	die();
}
?>
