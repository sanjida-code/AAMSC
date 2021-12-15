
<!DOCTYPE HTML>  
<html>
<title>Register Form</title>
<head>
<style>
body {background: lightblue;margin-top:0px;}
.error {color: #FF0000;}

</style>
</head>
<body >  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $roleErr = "";
$username = $email = $gender = $address = $web = $role = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
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

<div style="margin:0px 300px 0px 300px;padding:5px; background:lightpink;">
<center>
<form  method="post" action="register_teacher_php.php" style="heigth:100%;" >  
<h1 >Register Form For Teacher</h1>
<hr>
<table style="margin:auto;">
  <tr>
  <td>ID Number: </td><td><input type="number" name="id_number" value=" ">
  </td>
<tr>
  <td>Image: </td><td><input type="file" name="image" value=" ">
  </td>
  <tr>
  <td>Name: </td><td><input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  </td>
  </tr>
   <td>NID Number: </td><td><input type="number" name="id" value=" ">
  </td>
<tr>
  <tr>
  <td>Birth Date: </td><td><input type="date" name="birth_date" value=" ">
  </td>
  </tr>
   <tr>
  <td>Phone Number: </td><td><input type="number" name="phone" value=" ">
  </td>
  </tr>
  <tr>
  <td>E-mail: </td><td><input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  </td>
  </tr>
  <tr>
  <td>Address: </td><td><textarea name="address" rows="5" cols="40"><?php echo $address;?></textarea>
  </td>
  </tr>
  <tr> 
  
  <td>
  Gender:</td>
  <td>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
    </td>
  </tr>
  <tr> 
  <td> Password: </td>
  <td>    <input type="password" id="psw" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password" required><br>
	<input type="checkbox" onclick="myFunction()"style="text-align:right;">Show Password<br>
  </td>
  </tr>
  <tr> 
  </tr>
</table>  
<br>
  <input type="submit" name="submit" value="Submit" style="padding:15px; background:#3377ff;color:white;"> 
<br><br>
<br><br>
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
</form>
</center>
</div>

<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
function myFunction() {
  var x = document.getElementById("psw");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


</body>
</html>