<title> Registration  </title>


 <?php  
    $message = '';  
    $error = '';  
    if(isset($_POST["submit"]))  
     {  
      if(empty($_POST["name"]))  
      {  
           $nameError = "<label class='text-danger'>Enter Name</label>";  
      }  
      else if(empty($_POST["email"]))  
      {  
           $emailError = "<label class='text-danger'>Enter Email</label>";  
      }  
      else if(empty($_POST["username"]))  
      {  
           $usernameError = "<label class='text-danger'>Enter User Name</label>";  
      } 
       else if(empty($_POST["password"]))  
      {  
           $passwordError = "<label class='text-danger'>Enter Password</label>";  
      } 
       else if(empty($_POST["confirmpassword"]))  
      {  
            $confirmpasswordError = "<label class='text-danger'>Enter Confirm Password </label>";  
      } 
       else if(empty($_POST["gender"]))  
      {  
          $genderError = "<label class='text-danger'>Enter Gender</label>";  
      } 
       else if(empty($_POST["dateofbirth"]))  
      {  
           $dateofbirthError = "<label class='text-danger'>Enter Date Of Birth</label>";  
      } 
            
      else  
      {    
  
            $n=$_POST['name'];
   
              if(!preg_match("/^[a-zA-Z ]*$/",$n)) 
                 {
                 $nameError = "Only letters and white spaces allowed here!";
               }      
                 
              else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
                 {
                  $emailError = "Invalid email format and must be like acb@.Com! ";
               }
                  
               else if(file_exists('data.json'))  
               {  
        
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array( 
                          
                          'name'              =>     $_POST['name'],  
                     'email'             =>     $_POST["email"],  
                     'username'          =>     $_POST["username"],  
                          'password'          =>     $_POST['password'],  
                     'confirmpassword'   =>     $_POST["confirmpassword"],  
                     'gender'            =>     $_POST["gender"],
                          'dateofbirth'       =>     $_POST["dateofbirth"]
                     
                          
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'> File Submitted Success fully </p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
    }  
 ?>
 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Append Data to JSON File using PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      
      
     <body>  
          
           <br />  
           <div class="container" style="width:500px;">  
                <fieldset><legend><h3 align=""> <b> REGISTRATION FORM  </b></h3><br />  </legend> <fieldset>              
                <form method="post">  
                    
                   <div>
                            
                     <label>Name <span style="color: rgb(255, 255, 255);"> ******************* </span> : </label>  
                     <input type="text" name="name" id="name" ><br/> 
                          
                          <span style="color:red">
                          
                          <?php 
                          if(isset($nameError))  
                     {  
                          echo $nameError;  
                     }  
                     ?>
                         
                         </span>
                            <hr>
                         </div> 
                         
                         
                         <div>
                         
                     <label>Email <span style="color: rgb(255, 255, 255);"> ******************* </span> : </label>
                     <input type="email" name="email" id="email" ><br/> 
                          

                          
                          <?php
                          if(isset($emailError))  
                     {  
                          echo $emailError;  
                     }  
                     ?>
                          
                         
                       <hr>
                         </div>
                         
                         
                         <div>
                     <label>User Name <span style="color: rgb(255, 255, 255);"> ************* </span> : </label>  
                     <input type="text" name="username" id="username" > <br/> 
                       
                         <?php
                          if(isset($usernameError))  
                     {  
                          echo $usernameError;  
                     }  
                     ?> 
                          
                           <hr>
                    </div>                        
                          
                         <div> 
                          <label>Password <span style="color: rgb(255, 255, 255);"> *************** </span> : </label>  
                     <input type="password" name="password" id="password" /><br/>  
                         
                         <?php
                          if(isset($passwordError))  
                     {  
                          echo $passwordError;  
                     }  
                     ?>
                           
                           <hr>
                    </div> 
                          
                          
                          
                          <div>
                     <label>Confirm Password <span style="color: rgb(255, 255, 255);"> ***** </span> : </label> 
                     <input type="password" name="confirmpassword" class="confirmpassword" /><br/> 
                          
                     <?php
                          if(isset($confirmpasswordError))  
                     {  
                          echo $confirmpasswordError;  
                     }  
                     ?> 
                          
                          <hr>
                    </div>  
                          
                          <div>
                     <label>Gender <span style="color: rgb(255, 255, 255);"> ******************* </span> : </label>  
                     <input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender" value="Female">
                           Female <input type="radio" name="gender" value="Other" > Other <br/>
                          
                          <?php
                          if(isset($genderError))  
                     {  
                          echo $genderError;  
                     }  
                     ?>  
                   
                           <hr>
                    </div> 
                   
                           
                          <div> 
                         <label>Date Of Birth <span style="color: rgb(255, 255, 255);"> ************ </span> : </label>  
                     <input type="date" name="dateofbirth" id="dateofbirth" ><br/> 
                          
                          <?php
                          if(isset($dateofError))  
                     {  
                          echo $dateofError;  
                     }  
                     ?>  </span>   
                         <hr>
                    </div>  
                          
          
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" /> <input type="reset" value="Reset" class="btn btn-info" /> <br>                      
                     <?php  
                          
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
             
           <br />  
      
      
     </body>  
     
 </html>  