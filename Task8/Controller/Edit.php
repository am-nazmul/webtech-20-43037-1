<?php
session_start();
require_once '../Model/Operation.php';
           // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $date_of_birthErr = "";
        $name = $email = $gender = $date_of_birth = ""; 
		$update=false;

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
       {
             if (empty($_POST["name"])) 
		     {
               $nameErr = "Name is required!";
             } 
		  
		    else 
		    {
               $name = test_input($_POST["name"]);
		
		       // contains minimum word
		    
               // check if name only contains letters and whitespace , period
                if(!preg_match("/^[a-zA-Z-'. ]*$/",$name)) 
		        {
                 $nameErr = "Only letters and white space allowed!";
                }
             

            }
  
            if(empty($_POST["email"])) 
		    {
                $emailErr = "Email is required!";
            } 
		   else 
		   {
               $email = test_input($_POST["email"]);
	  
             // check if e-mail address is well-formed
              if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		       {
                  $emailErr = "Invalid email format and must be in anything@example.Com! ";
               }
            }
    
	         if(empty($_POST["gender"])) 
		    {
               $genderErr = "Gender is required!";
            } 
		    else 
		    {
             $gender = test_input($_POST["gender"]);
            }
	      
	
	        if(empty($_POST["date_of_birth"])) 
		    {
                $date_of_birthErr = "Date of birth is required!";
            } 
		    else 
		    {
               $date_of_birth = test_input($_POST["date_of_birth"]); 
            }
           
         if($nameErr!="" && $genderErr!="" && $emailErr!="" && $date_of_birthErr!="")
         {
          
           $update=false;
         }
         else
         {
            if(isset($_POST["submit"]))
            {
                $data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['gender'] = $_POST['gender'];
    $_SESSION["Name"]=$_POST['name'];
    $_SESSION["Email"]=$_POST['email'];
    $_SESSION["Gender"]=$_POST['gender'];
            }

      
              if(updateuser($_SESSION["User"],$data)){
              $update=true;
              }
              

            
           
         }
         
         


        }


        function test_input($data) 
		{
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

       
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
    if($update)
        {
            echo "Update sucsessfully </br>";
           
              //header('Location: ../Dashboad.php');
        }
        else
        echo 'You are not allowed to access this page.';
        ?>
        <a href="Dashboad.php">Click Me</a>
    </body>
    </html>