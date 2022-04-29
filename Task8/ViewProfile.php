<?php
session_start();
?>

<!DOCTYPE html>

<html>
     <fieldset>
	 <head>
	     <title> Profile </title>
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
		 
		 
		        Logged in as<a style ="color:SlateBlu;"  href= "ViewProfile.php"> <?php  echo $_SESSION["Name"]?>| </a>
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
                <li> <a style ="color:SlateBlu;" href="Editprofile.php"> Edit Profile </a></li>
				
                <li> <a style ="color:SlateBlu;" href="Changepass.php">Change Password</a> </li>
                <li> <a style ="color:SlateBlu;" href="Homepage.html">Logout</a> </li>
                 
		     </ul>  
		     </h2></fieldset>
		 </fieldset><br>
			 
		   <div>
		   
		   
			<fieldset><fieldset>
		    <div align="center">
                <h1>
                    <b>PROFILE</b>
                </h1>
            </div>
			
			<h3 align="center">
		    
			<img  src="1.png" height="200px" width="250px"  > </img> <br>
			<a align="right" href=" "> Change </a> <br><br>
			
			
			
		      Name <span style="color: rgb(255, 255, 255);"> </span>:<?php  echo $_SESSION["Name"]?><hr>
	          Email <span style="color: rgb(255, 255, 255);"> </span> : <?php  echo $_SESSION["Email"]?> <hr>
		      Gender<span style="color: rgb(255, 255, 255);"> </span>: <?php  echo $_SESSION["Gender"]?> <hr>
		      

		   
		    <a tyle ="color:SlateBlu;"  href=""> Edit Profile </a>
			
			</h3>
			</fieldset>
		    </fieldset>
			
		</div>
		
		   <div align="center">
		   
		    <hr>
		   
		   <h4> <span style="color: rgb(140, 140, 140);"> Copyright Š  <?php echo date(2017);?> </span> </h4>
		   
		   </div>
		   
	 </body>
	 </fieldset>
</html>