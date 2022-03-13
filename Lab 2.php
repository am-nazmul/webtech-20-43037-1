<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		.red{
			color: red;
		}
	</style>
	
	<title></title>
</head>
<body>


	<?php 

		$nameErr = $emailErr = $genderErr = $bloodGrpErr = $dobErr = "";
		$name = $email = $gender = $bloodGrp = $dob ="";


		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
}

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }

    if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }

  }

	?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<fieldset>
		<legend>Name:</legend> 
		<input type="text" name="name" value="<?php echo $name;?>"><span class="red">*<?php echo $nameErr ?></span>
		<br>
		</fieldset>

		<fieldset>
			<legend>E-mail: </legend>
		
		<input type="text" name="email" value="<?php echo $email;?>"><span class="red">*<?php echo $emailErr ?></span>
		<br>
		</fieldset>

		<fieldset>
				<legend>DATE OF BIRTH</legend>
				<input type="date" name="dob" value="dob">
			</fieldset>
		
		<fieldset>
		<legend>Gender</legend>
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="female") echo "checked";?>
		value="female">Female
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="male") echo "checked";?>
		value="male">Male
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="other") echo "checked";?>
		value="other">Other<span class="red">*<?php echo $genderErr ?></span>
		<br>
	</fieldset>
		<fieldset>

			<legend>DEGREE</legend>
			<input type="checkbox" name="SSC" value="ssc">SSC
			<input type="checkbox" name="hsc" value="hsc">HSC
			<input type="checkbox" name="bsc" value="bsc">BSc
			<input type="checkbox" name="Msc" value="msc">MSc
		</fieldset>

		<fieldset>
			<legend>BLOOD GROUP</legend>
			<?php
			if (empty($_POST["bloodGrp"])) {
			    $bloodGrpErr = "Name is required";
			  } else {
			    $bloodGrp = test_input($_POST["bloodGrp"]);
			  }
			  ?>
			<select id="bgrp" name="bgrp">
		    <option value="o+">O+</option>
		    <option value="o-">O-</option>
		    <option value="a+">A+</option>
		    <option value="a-">A-</option>
		  </select>
		</fieldset>

		<input type="submit" name="Submit">

	</form>

	<h2>Input Data</h2>
	<?php 
	echo $name."<br>";
	echo $email."<br>";
	echo $dob. "<br>";
	echo $gender."<br>";
	
	 ?>

</body>
</html>