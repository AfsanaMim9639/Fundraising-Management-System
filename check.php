<?php

$connect = mysqli_connect("localhost", "root", "", "project");

?>
<html>  
      <head>  
           
     <style>
   
   .box
   {
    width:750px;
    padding:20px;
    
    border-radius:5px;
    margin-top:100px;
   }
   .check{
	   
	   border:1px solid grey;
	   width:50%;
	   box-shadow:10px 10px 5px grey;
	   margin-left:300px;
	   font-size:20px;
	   
   }
   .submitcheck{
	   
	   width:100%;
	   height:40px;
	   background-color:#800040;
	   color:white;
	   font-size:30px
   }
   .input-group input{
	   width:100%;
	   height:35px;
	   font-size:20px;
	   
   }
   h2{
	   background-color:#800040;
	   height:70px;
	   margin-top:-2px;
	   color:white;
	   border-bottom:2px solid grey;
   }
   
  </style>
      </head>  
      <body>  
        <div class="check-box">
          
          <form method="post" action="" class="check">
		  <h2 style="text-align:center;">Add Volunteer</h2>
		  <div class="input-group">
  	    <label>Username :</label>
  	    <input type="text" name="username" id="username"><br /><br />
	  
	  <label>Email :</label>
  	  <input type="text" name="email"><br /><br />
  	
	<label>Phone :</label>
  	  <input type="text" name="phone"><br /><br />
  	
  	</div>
		  
		  <h4>Volunteer Project Interest</h4> 
          
           <p><input type="checkbox" name="language[]" value="Winter Program" /> Winter Program</p>
           <p><input type="checkbox" name="language[]" value="Summer Program" /> Summer Program</p>
           <p><input type="checkbox" name="language[]" value="Spring Program" /> Spring Program</p>
           <p><input type="checkbox" name="language[]" value="Kids Program" /> Kids Program</p>
           <p><input type="checkbox" name="language[]" value="Fundraising & Events" /> Fundraising & Events</p>
           
		   <h4>Volunteer Availability</h4> 
          
           <p><input type="checkbox" name="languag[]" value="Saturday" /> Saturday</p>
           <p><input type="checkbox" name="languag[]" value="Sunday" /> Sunday</p>
           <p><input type="checkbox" name="languag[]" value="Monday" /> Monday</p>
           <p><input type="checkbox" name="languag[]" value="Tuesday" /> Tuesday</p>
           <p><input type="checkbox" name="languag[]" value="Wednesday" /> Wednesday</p>
           <p><input type="checkbox" name="languag[]" value="Thursday" /> Thursday</p>
           <p><input type="checkbox" name="languag[]" value="Friday" /> Friday</p>
           
		   
		    <br><b>Gender:</b>
  	    <input type="radio" name="gender" value="Male">Male
  	    <input type="radio" name="gender" value="Female">Female<br /><br />
  	     <br /><br />
		 <b>Past Volunteer Experience:</b><br><br> 
		 
		 <textarea name="experience" rows="5" cols="40"></textarea>  
		   
		   
		   
		   <br /><br />
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
		   $email=($_POST['email']);
		   $phone=($_POST['phone']);
		   $gender=($_POST['gender']);
           $experience=($_POST['experience']);
      
           $for_query = '';
		   $for_quer = '';
           if(!empty($_POST["language"]))
           {
            foreach($_POST["language"] as $language)
            {
             $for_query .= $language . ', ';
            }
			
			
			
			if(!empty($_POST["languag"]))
           {
            foreach($_POST["languag"] as $languag)
            {
             $for_quer .= $languag . ', ';
            }
            $for_quer = substr($for_quer, 0, -2);
            $query = "INSERT INTO mim4 (username, email, phone, check1, check2,gender,experience) VALUES ('$username','$email','$phone','$for_query', '$for_quer','$gender','$experience')";
            mysqli_query($connect, $query);
            
           }
           
          }
		  }
          ?>
     