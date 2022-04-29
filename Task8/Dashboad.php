<?php
session_start();
?>

<!DOCTYPE html>

<html>
<fieldset>
     
	 <head>
	     <title> DASHBOARD </title>
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
		 
		   
		       <h3 align= "right">
		 
		 
		        <a href="Dashboad.php"><b>Welcome  <?php echo $_SESSION["Name"]?></b></a>
		       <a style="color:SlateBlu;" href="Homepage.html">|  Logout   </a>  
		       
		      
		  
		   </h3>
		   
		  <hr>
		  
		</div> 
		
		<div>
			<fieldset>
		
		  <legend> <h2> <u> Account </u> </h2></legend> <style="color: rgb(255, 255, 255);"> <h1 align="center" ><h1/>
		   
		    
		   
            <h2>
            <ul>
                <li> <a style ="color:SlateBlu;" href="Dashboad.php">Dashboard </a></li> 
                <li> <a style ="color:SlateBlu;" href= "ViewProfile.php">View Profile</a> </li>
                <li> <a style ="color:SlateBlu;" href="Editprofile.php"> Edit Profile</a> </li>
				
                <li> <a style ="color:SlateBlu;" href="Changepass.php">Change Password</a> </li>
                
                 
		     </ul>  
		     </h2>
		   
		  
		   
		     <hr>
	     
		  
		</fieldset>

		<fieldset>
        
		
		
</div>

   <div>
	     
   

   </div>
		
	    <div align="center">
		
		    <h5> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2017);?> <span/> <h5/>
		   
		 </div>
		   
	 </body>
	 </fieldset>
</html>	 