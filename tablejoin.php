<?php
$connect = mysqli_connect("localhost", "root", "", "project");




?>


<body>
        
        <form action="" method="post">
            
	
					
      <?php     
$sqlgett2="SELECT users.id,users.name,users.city,users2.email,users2.phone FROM users, users2 WHERE users.id=users2.serial_no;";
$sqldataa2= mysqli_query($connect, $sqlgett2);   
		   
	?>	   <table border ="1">
	         <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
					<th>city</th>
                </tr>
	
		   <?php while($row = mysqli_fetch_array($sqldataa2)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['phone'];?></td>

					<td><?php echo $row['city'];?></td>
                </tr>
                <?php endwhile;?>
           <table>
        </form>
        
    </body>