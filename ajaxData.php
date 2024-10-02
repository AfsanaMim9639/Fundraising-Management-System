<?php
//Include database configuration file
include('db.php');

if(isset($_POST["id"]) && !empty($_POST["id"])){
    //Get all state data
    $query = $mysqli->query("SELECT * FROM mim4 WHERE ref_id = ".$_POST['id']." ");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Volunteer Name</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['id'].'">'.$row['username'].'</option>';
        }
    }else{
        echo '<option value=""> not available</option>';
    }
}






?>
