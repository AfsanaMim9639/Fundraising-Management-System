<?php

$connect = mysqli_connect("localhost", "root", "", "project");
   
if(isset($_POST['submit'])){
	
	
	$name=($_POST['name']);
	$amount=($_POST['amount']);
	$city=($_POST['city']);
	
	
	$sql="INSERT INTO users (name, amount, city) 
			VALUES ('$name', '$amount',  '$city')";
	mysqli_query($connect, $sql);
}



if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users` WHERE CONCAT(`id`, `name`, `amount`, `city`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `users`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{     $connect = mysqli_connect("localhost", "root", "", "project");

     $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>City</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['amount'];?></td>
                    <td><?php echo $row['city'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
			
			
			  <input type="text" name="name"><br><br>
             <input type="text" name="amount"><br><br>
            
            <input type="text" name="city"><br><br>
            <input type="submit" name="submit" value="Submit"><br><br>
            
           
           
           
        </form>
        
    </body>
</html>



	       
