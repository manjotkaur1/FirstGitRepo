<!DOCTYPE html>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
</head>
<!------ Include the above in your HEAD tag ---------->
<body>
<?php

$nameErr = $emailErr = $genderErr= $phoneerr = $messageerr = "";
$name = $email = $gender = $phone =$message = $phone = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["phone"])) {
    $phoneerr = "";
  } else {
    $phone = test_input($_POST["phone"]);
  }

  if (empty($_POST["message"])) {
    $messageerr = "";
  } else {
    $message = test_input($_POST["message"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="container" >

<form class="well span4" style= "margin-left: 359px"; method="post" action="<?php $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data">
  <div class="row">
    	<div class="span3">
	 	<div  style= "margin-left: 130px";>
		      <h1>Form<h1>
		</div>
			<label> Name</label>
			<input type="text" class="span4"  minlength=3  required name="name">   
		    <label>Email Address</label>
			<input type="email" class="span4"  required  name="email">
			<label>Phone</label>
			<input type="text" class="span4"  pattern="^[0-9]*$"  minlength=10  maxlength=10 required name="phone">
			<label>Gender</label>
			<input type="radio"  name="gender" value="female"  > Female
            <input type="radio"  name="gender" value="male">Male
			
			
					
	
			<label>Description</label>
			<textarea name="message"  required class="input-xlarge span4" rows="2"></textarea>
			
			 <label for="exampleInputFile">File input:</label>
			<input name="file" size="60" type="file" accept=".txt" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
	
	<button type="submit" name="submit"  style= "margin-left: 309px";  class="btn btn-primary ">Send</button>
		</div>
	</div>
</form>
</div>



<?php
echo "<h2>Details:</h2>";
echo "<br>";
echo "Name :".$name;
echo "<br>";
echo "Email :".$email;
echo "<br>";
echo "Phone :".$phone;
echo "<br>";
echo "Gender :".$gender;
echo "<br>";
echo "Description :".$message;
echo "<br>";
if($_FILES){
  //Checking if file is selected or not
  if($_FILES['file']['name'] != "") {
  
        //Checking if the file is plain text or not
  if(isset($_FILES) && $_FILES['file']['type'] != 'text/plain') {
  echo "<span>File could not be accepted ! Please upload any '*.pdf_add_annotation' file.</span>";
  exit();
  } 
  echo "<center><span id='Content'>Contents of ".$_FILES['file']['name']." File</span></center>";
  
  //Getting and storing the temporary file name of the uploaded file
  $fileName = $_FILES['file']['tmp_name'];
  
  //Throw an error message if the file could not be open
  $file = fopen($fileName,"r") or exit("Unable to open file!");
   
  // Reading a .txt file line by line
  while(!feof($file)) {
  echo fgets($file). "";
  }
   
  //Reading a .txt file character by character
  while(!feof($file)) {
 echo fgetc($file);
 }
 fclose($file);
 }

 else {
 if(isset($_FILES) && $_FILES['file']['type'] == '')
 echo "<span>Please Choose a file by click on 'Browse' or 'Choose File' button.</span>";
 }
}
?>


</body>
</html>