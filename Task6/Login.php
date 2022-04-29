<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<br>
<?php
       include 'Navvar.php';
       ?>  
      
	       <br>
	       
	       <fieldset>

          <legend > <h2> LOGIN </h2> </legend>
		  
          <form method="post" action="Controller/Checkuser.php"> 
		  
		  
		     <b> <label for="username"> UserName : </label> </b>
			   <input type="text" name="username" value="<?php echo $username;?>">
			   <!-- //<span class="error"> * <?php echo $usernameErr; ?> </span> -->
               <br><br>
			  
			    <b> <label for="password"> Password : </label> </b>
                <input type="password" name="password" value="<?php echo $password;?>">
                <!-- <span class="error"> * <?php echo $passwordErr;?></span> -->
                <br><br>
				
		     <div>
                <hr>
                <input type="checkbox" name="Remember me"> Remember Me <br><br>

                <input type="submit" name="submit" value="Submit"   > 
                
                <a href="Forgetpass.php">Forgot Password?</a><br>

             
                    
             </div>
 		
         </form> <br>
           
          <hr>
	      </div>
		   
		   <div align="center">
		   
		   <h4 > <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2017);?> </span> </h4>
		   </legend>
		   </div>

         </fieldset>
	 
    </body>
  
</html>