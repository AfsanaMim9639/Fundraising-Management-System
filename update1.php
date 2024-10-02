<html>
<head>
<body>
<?php
//connect with mysql

$connect = mysqli_connect("localhost", "root", "", "project");

//Select Query
$query = "SELECT * FROM `users`";
//Execute the query

$records=mysqli_query($connect,$query);

?>
<table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>City</th>
                </tr>
       
	   
	   <?php while($row = mysqli_fetch_array($records)){
		   
		      echo "<tr><form action=update2.php method=post>";
			  echo "<td><input type=text name=name value='".$row['name']."'></td>";
              echo "<td><input type=text name=amount value='".$row['amount']."'></td>";
              echo "<td><input type=text name=city value='".$row['city']."'></td>";
               echo "<input type=hidden name=id value='".$row['id']."'>";
			   echo "<td><input type=submit>";
			   echo "</form></tr>";
                } ?>
</table>
</body>

</head>
</html>