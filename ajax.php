<?php
//fetch all country data from database
//Include database configuration file
include('db.php');

    $query = $mysqli->query("SELECT * FROM mim5 ");// select all country from database 

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display states list
    if($rowCount > 0)
		
		{
	echo '<option value="">Select Place Name</option>';// initial message display{  
	//echo '<input type="text" >';// initial message display
        
        while($row = $query->fetch_assoc())
		{
            echo '<option value="'.$row['ref_id'].'">'.$row['placename'].'</option>';// select country id & name from country table
        }
    }
	else
	{
        echo '<option value="">Country Not Available</option>'; //display when no data!
	}



?>
