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
	   margin-left:350px;
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
		  <h2 style="text-align:center;">Time Sheet</h2><hr>
		  <div class="input-group">
  	  <label>Username :</label>
  	  <input type="text" name="username"><br /><br />
	  
	  <label>Group-name :</label>
  	  <input type="text" name="group1"><br /><br />
  	
	  <label>Total Member :</label>
  	  <input type="text" name="total"><br /><br />
	  
	  <label>Time-Start :</label>
  	  <input type="text" name="start"><br /><br />
  	
	<label>Time-End :</label>
  	  <input type="text" name="end"><br /><br />
	  
	  <label>Work Name :</label>
  	  <input type="text" name="workname"><br /><br />
	  
  	
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

	        $username=($_POST['username']); 
			$group1=($_POST['group1']);
			$total=($_POST['total']);
            
			$start=($_POST['start']);
			$end=($_POST['end']);
            $workname=($_POST['workname']);

            $query = "INSERT INTO mim5 (username, group1, total,start, end, workname) VALUES ('$username','$group1','$total','$start','$end','$workname')";
            mysqli_query($connect, $query);
            
           }
           
          
		  
          ?>
     