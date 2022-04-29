
<!DOCTYPE html>
<html >
<fieldset>
  <head> <title>CHANGE PASSWORD </title>
     <style>
     .error {color: #FF0000;}
    </style>
   
  </head>
  <body>
  <br> 
		
        <div> 
        
          <p> <h1 style="color: green">  X  <sub style="color:black"> Company </sub> <h1> </p>
      
        
            <h2 align= "right">
      
      
            
            <a style="color:SlateBlu;" href="Homepage.php">  Logout </a>  
            
      
       
        </h2>
        
       <hr>
       
     </div> 
         <fieldset><fieldset>
         
       <legend><h2> <u> Account </u> </h2> <style="color: rgb(255, 255, 255);"> </legend> 
        
         
        
         <h2>
         <ul>
             <li> <a style="color:SlateBlu;" href="Dashboad.php">  Dashboard   </a></li> 
             <li> <a style ="color:SlateBlu;"  href= "ViewProfile.php"> View Profile </a> </li>
             <li> <a style ="color:SlateBlu;" href="Editprofile"> Edit Profile </a></li>
             
             <li> <a style ="color:SlateBlu;" href="Changepass.php">Change Password</a> </li>
             
              
          </ul>  
          </h2></fieldset>
      </fieldset><br>

    
	      <div>
		  <br> <br>
		  <fieldset align="center">
         
          <form  method="post" action="Controller/Pass.php"> <br>
          	<fieldset>
		  
		  <legend><h2 align="center"> CHANGE PASSWORD  </h2></legend>
		  
		  <p align="center">
		  
	  
          <label>Current Password:</label> 
		  <input type="password" name="currentPassword" value="<?php echo $currentPassword;?>">
          
          <br/><br/>
		  
		  
          <label style="color:green">New Password:</label>
          <input type="password" name="newpassword" value="<?php echo $newpassword;?>">
         
          <br/><br/>
		  
		  
          <label style="color:Red">Retype New Password:</label>
          <input type="password" name="rnewpassword" value="<?php echo $rnewpassword;?>">
          
          
		  
		  <hr> 
		 
         <h4 align = "center"> <input type="submit" name="submit" value="Submit"> </h4>
		 
          <br/>
		    
		  </p>
		  </fieldset>
		  </div>
		  
		  <div align="center">
		  
		             <h4> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2017);?> </span> </h4>
		   
		        </div>
				
                 <br>
               </fieldset>
      </form>


  
  </body>
</fieldset>
</html>