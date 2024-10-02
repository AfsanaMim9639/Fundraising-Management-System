


<?php
$connect = mysqli_connect("localhost", "root", "", "project");




?>

<style>
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
	background-color: 	#394d00;
	height:100px;
    text-align:center;
	color:white;
	
}
th{
	text-align: center;
}
</style>
<body>
        
        <form action="" method="post">
            
	<div class="h1"><h1>Time Sheet</h1><div>

<br><hr><br>
					
      <?php     
$sqlgett2="SELECT mim4.id,mim4.username,mim4.check1,mim4.check2,mim5.placename,mim5.start,mim5.end FROM mim4,mim5 ";
$sqldataa2= mysqli_query($connect, $sqlgett2);   
		   
	?>	   <table border ="1">
	         <tr>
                    <th>Id</th>
                    <th>Userame</th>
                    <th>Project Name</th>
                    <th>Volunteer Availability</th>
					<th>Place Name</th>
					<th>Start Time</th>
					<th>End Time</th>
                </tr>
	
		   <?php while($row = mysqli_fetch_array($sqldataa2)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['check1'];?></td>
					<td><?php echo $row['check2'];?></td>
                    <td><?php echo $row['placename'];?></td>

                    <td><?php echo $row['start'];?></td>

					<td><?php echo $row['end'];?></td>
					
                </tr>
                <?php endwhile;?>
           <table>
        </form>
        
    </body>