<?php
//connect with mysql

$connect = mysqli_connect("localhost", "root", "", "project");

//Update Query
$_GET['id'];
$_GET['username'];
$_GET['email'];

$_GET['experience'];
if(isset($_GET['update'])){
	
            $id=($_GET['id']); 
	       $username=($_GET['username']); 
		   $email=($_GET['email']);
		   
           $experience=($_GET['experience']);
      

            
	





$query = "UPDATE `mim4` SET username='$username' ,email='$email' ,experience='$experience' WHERE id='$id'";

$data=mysqli_query($connect,$query);
if($data){
	
	 header("refresh:0; url=volundisplay.php");
	 }



else{
	echo "Not update";
}
}
?>



<body>
<form action="" method="">
Id<input type="text" name="id" value="<?php echo $_GET['id'];?>"><br><br>
Username<input type="text" name="username" value="<?php echo $_GET['username']; ?>"><br><br>
Email<input type="text" name="email" value="<?php echo $_GET['email'];?>"><br><br>

Experience<input type="text" name="experience" value="<?php echo $_GET['experience'];?>"><br><br>

<input type="submit" name="update" value="Update">
</form>

</body>