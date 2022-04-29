<?php
session_start();
?>

<!DOCTYPE HTML>  
<html>
<fieldset>
  <head> <title>  Edit Profile </title>
    <style>
     .error {color: #FF0000;}
    </style>

    </head>
    <body>  
    <br> 
		
        <div> 
        
          <p> <h1 style="color: green">  X  <sub style="color:black"> Company </sub> <h1> </p>
      
        
            <h2 align= "right">
      
      
             Logged in as<a style ="color:SlateBlu;"  href= "profile.php"> <?php  echo $_SESSION["Name"]?>| </a>
            <a style="color:SlateBlu;" href="Home.php">  Logout </a>  
            
      
       
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
	   

    
	  
	  
          <fieldset>
          <form method="post" action="Controller/Edit.php"> 
		  <fieldset>
		  
		       <legend align="center"><h1> EDIT PROFILE </h1></legend>
		       <p align="center">
		  
		       <b> <p align="center" <label for="name"> Name : </label> </b> 
			   <input type="text" name="name" value="name"> 
			   
               <hr>
			  
			    <b> <p align="center" <label for="email"> Email : </label> </b>
                <input type="text" name="email" value="email">
                
                <hr>

		        <b> <p align="center" <label for="gender"> Gender : </label></b>
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="other"> Other  
               
                <hr>
		  
	            
    
 
                 <h3 align="center"><input type="submit" name="submit" value="Submit"> </h3>
				  <hr>

                 </p>
				 
				<div align="center">
		  
		             <h4 > <style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2017);?>  </h4>
		   
		        </div>
				</fieldset>
                </form> <br>

               

    </body>
</fieldset>
</html>