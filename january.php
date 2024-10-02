<?php

$connect = mysqli_connect("localhost", "root", "", "project");

?>
<html>  
      <head>  
           
     <style>
   
    .check{
	   
	   border:1px solid grey;
	   width:40%;
	   box-shadow:10px 10px 5px grey;
	   margin-left:300px;
	   font-size:20px;
	   
   }
   .submitcheck{
	   
	   width:100%;
	   height:40px;
	   background-color:#00004d;
	   color:white;
	   font-size:30px
   }
   .input-group input{
	   width:100%;
	   height:35px;
	   font-size:20px;
	   
   }
   
  </style>
      </head>  
      <body>  
        <div class="check-box">
          
          <form method="post" action="" class="check">
		  <h2 style="text-align:center;">January's Project</h2><hr>
		  <div class="input-group">
  	  <label>Project Name :</label>
  	  <input type="text" name="projectname"><br /><br />
	  
	  <label>Place Name :</label>
  	  <input type="text" name="placename"><br /><br />
  	 
	  <label>Start Date :</label>
  	  <input type="date" name="startdate"><br /><br />
	  
	  <label>End Date :</label>
  	  <input type="date" name="enddate"><br /><br />
  	
	<label>Volunteers:</label>
  	  <input type="text" name="volun"><br /><br />
	  
	  <label>Hours :</label>
  	  <input type="hour" name="hour"><br /><br />
	 
	 <label>Total Expenses :</label>
  	  <input type="text" name="total"><br /><br />
	  
  	
  	</div>
		  
		   
		   
		   
		   
		   
		   <p><input type="submit" name="submit" class="submitcheck" value="Submit" /></p>
          
		  
		  
		  
		  
		  </form>
		  
		  <br />
         </div>  
      </body>  
 </html>
          <?php
          if(isset($_POST["submit"]))
          {

	        $projectname=($_POST['projectname']); 
			$placename=($_POST['placename']);
			$startdate=($_POST['startdate']);
			$enddate=($_POST['enddate']);
            $volun=($_POST['volun']);
			$hour=($_POST['hour']);
			$total=($_POST['total']);
            $query = "INSERT INTO january (projectname, placename, startdate,enddate, volun, hour, total) VALUES ('$projectname','$placename','$startdate','$enddate','$volun','$hour','$total')";
            mysqli_query($connect, $query);
            
           }
           
          
		  
          ?>
     