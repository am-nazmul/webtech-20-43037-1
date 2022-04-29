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
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>  
  
        <div> 
        
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
       
       <h1 style="color: blanchedalmond; ">
          <b>Gadget Mart <sup>BD</sup></b> 
       </h1>
     </nav> 
            <h2 align= "right">
      
      
             Logged in as<a style ="color:SlateBlu;"  href= "Dashboad.php"> <?php  echo $_SESSION["Name"]?>| </a>
            <a style="color:SlateBlu;" href="Homepage.html">  Logout </a>  
            
      
       
        </h2>
        
       <hr>
       
     </div> 
         <fieldset><fieldset>
         
       <legend><h2> <u> Account </u> </h2> <style="color: rgb(255, 255, 255);"> </legend> 
        
         
        
         <h2>
         <ul>
             <li> <a style="color:SlateBlu;" href="Dashboad.php">  Dashboard   </a></li> 
             <li> <a style ="color:SlateBlu;"  href= "ViewProfile.php"> View Profile </a> </li>
             <li> <a style ="color:SlateBlu;" href="Editprofile.php"> Edit Profile </a></li>
             
             <li> <a style ="color:SlateBlu;" href="Changepass.php">Change Password</a> </li>
             
              
          </ul>  
          </h2></fieldset>
      </fieldset><br>
	   

    
	  
	  
          <fieldset>
          <form method="post" action="Controller/Edit.php"> 
		  
		      <div align="center">
                  <h3> <b> Edit Profile</b> </h3>
</div>
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