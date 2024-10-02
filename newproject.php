<?php

$connect = mysqli_connect("localhost", "root", "", "project");

?>
<html>  
      <head> 

	  <script src="jquery.min.js"></script>
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
           
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
   .input-group input,select{
	   width:100%;
	   height:35px;
	   font-size:20px;
	   
   }
   h2{
	   background-color:#00004d;
	   height:60px;
	   margin-top:-2px;
	   color:white;
   }
   
  </style>
  
  
  
  <script>
       window.load=$( document ).ready(function() {
	
	 $.ajax({
                type:'POST',
                url:'ajax.php',
                success:function(html){
                    $('#placename').html(html);
                
                                      }
                   }); 
				   
				    });  
					
					
				   $( document ).ready(function() {
					   
					   $('#placename').on('change',function(){//change function on police categories to display all state 
        var mim5ID = $(this).val();
        if(mim5ID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'id='+mim5ID,
                success:function(html){
                    $('#username').html(html);
                    
                                      }
                   }); 
                      }else{
                           $('#username').html('<option value="">Select category first</option>');
                            
                           }
    });
    
  
	
	});
	 
				   </script>
      </head>  
      <body>  
        <div class="check-box">
          
          <form method="post" action="" class="check">
		  <h2 style="text-align:center;">Add New Project</h2><hr>
		  <div class="input-group">
  	  <label>Place-name :</label>
  	  <select  name="placename" id="placename">
            <option value="">Select a Place-name</option>                            
       </select><br><br>
	  <label>Volunteer-name :</label>
  	   <select  name="username" id="username">
                        <option value="">Select volunteer-name</option>                            
                    </select>
	 <br /><br />
  	
	  <label>Total Member :</label>
  	  <input type="text" name="total"><br /><br />
	  
	  <label>Time-Start :</label>
  	  <input type="time" name="start"><br /><br />
  	
	  <label>Time-End :</label>
  	  <input type="time" name="end"><br /><br />
	  
	  <label>Project Name :</label>
  	  
	  <input list="abc" name="datalist">
		  <datalist id="abc">
	      <option value="Winter Program">
	      <option value="Summer Program">
		  <option value="Spring Program">
		  <option value="Kids Program">
		  <option value=" Fundraising & Events">
		  
	  </datalist>  <br /><br />
		<label>Donation Amount:</label>
  	  <input type="text" name="amount"><br /><br />
  	  <label>Goal:</label><br>
  	  <input type="text" name="goal"><br /><br />
  	     
  	  <label>Total Money:</label>
  	  <input type="text" name="money"><br /><br />
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

	        $placename=($_POST['placename']); 
			$username=($_POST['username']);
			$total=($_POST['total']);
            
			$start=($_POST['start']);
			$end=($_POST['end']);
            $datalist=($_POST['datalist']);
            $amount=($_POST['amount']);
			$goal=($_POST['goal']);
            $money=($_POST['money']);

            $query = "INSERT INTO mim5 (placename, username, total,start, end, datalist, amount,goal,money) VALUES ('$placename','$username','$total','$start','$end','$datalist','$amount','$goal','$money')";
            mysqli_query($connect, $query);
            
           }
           
          
		  
          ?>
     