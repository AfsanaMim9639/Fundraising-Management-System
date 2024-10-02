<?php
//connect with mysql

$connect = mysqli_connect("localhost", "root", "", "project");

//Update Query
$_GET['id'];
$_GET['placename'];
$_GET['volun'];

$_GET['total'];
$_GET['start'];
$_GET['end'];

$_GET['datalist'];
$_GET['amount'];
if(isset($_GET['update'])){
	
            $id=($_GET['id']); 
	       $placename=($_GET['placename']); 
		   $volun=($_GET['volun']);
		   
           $total=($_GET['total']);
      
          $start=($_GET['start']); 
		   $end=($_GET['end']);
		   
           $datalist=($_GET['datalist']);
            $amount=($_GET['amount']);
      
            
            
	





$query = "UPDATE `mim5` SET placename='$placename' ,volun='$volun' ,total='$total',start='$start',end='$end',datalist='$datalist',amount='$amount' WHERE id='$id'";

$data=mysqli_query($connect,$query);
if($data){
	
	 header("refresh:0; url=newprodis.php");
	 }



else{
	echo "Not update";
}
}
?>



<body>
<form action="" method="">
Id<input type="text" name="id" value="<?php echo $_GET['id'];?>"><br><br>
Place name<input type="text" name="placename" value="<?php echo $_GET['placename']; ?>"><br><br>
Volunteer<input type="text" name="volun" value="<?php echo $_GET['volun'];?>"><br><br>

Total Member<input type="text" name="total" value="<?php echo $_GET['total'];?>"><br><br>
Time Start<input type="text" name="start" value="<?php echo $_GET['start'];?>"><br><br>
Time End<input type="text" name="end" value="<?php echo $_GET['end']; ?>"><br><br>
Project Name<input type="text" name="datalist" value="<?php echo $_GET['datalist'];?>"><br><br>

Donation Amount<input type="text" name="amount" value="<?php echo $_GET['amount'];?>"><br><br>

<input type="submit" name="update" value="Update">
</form>

</body>