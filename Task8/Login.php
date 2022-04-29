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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
       
       <h1 style="color: blanchedalmond; ">
          <b>Gadget Mart <sup>BD</sup></b> 
       </h1>
     </nav> 
      
        
      <h3 align= "right">
      <a style="color:SlateBlu;" href="Homepage.html">  Home |  </a> 
      <a style="color:SlateBlu;" href="Login.php">  Login |  </a>  
      <a style="color:SlateBlu;" href="Registration.php">  Registration </a> 
 
  </h3>
      
	       <br>
	       
	       <fieldset>

          <legend > <h2> LOGIN </h2> </legend>
		  
          <form name="form" method="post" action="Controller/Checkuser.php" onsubmit="return validform();"> 
		  
		  
		     <b> <label for="username"> UserName : </label> </b>
			   <input type="text" name="username" id="username"value="<?php echo $username;?>">
			      <p id="usernameErr"></p>
               <br>
			  
			    <b> <label for="password"> Password : </label> </b>
                <input type="password" name="password" id="password" value="<?php echo $password;?>">
                <p id="passwordErr"></p>
                <br>
				
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
		   
		   <h4 > <span style="color: rgb(140, 140, 140);">Buy & Sell From  <?php echo date(2017);?> </span> </h4>
		   </legend>
		   </div>

         </fieldset>
	 
    </body>


    <script>
      function validform(){  

        var User=document.form.username.value;
        var Pass=document.form.password.value;
        let flag= true;
        if(User==null || User=="")
        {
          document.getElementById("usernameErr").innerHTML = "UserName can't be blank";
        document.getElementById("username").style.borderColor = "red";
        flag=false;
        }
        if(Pass==null || Pass=="")
        {
          document.getElementById("passwordErr").innerHTML = "Password can't be blank";
        document.getElementById("password").style.borderColor = "red";
        flag=false;
        }
        if(flag)
        return true;
        else 
        return false;
      }
    </script>
  
</html>