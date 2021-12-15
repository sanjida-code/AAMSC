
<!DOCTYPE html>
<html>
<head>
<title>Log In Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;background-color: lightblue;}
form {
background-color:lightblue;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #3377ff;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  font-size: 20px;
}
button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  background-color: #f44336;
  margin-left:620px;
}

.container {
  padding:100px 350px 0px 350px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }

}
@media(max-width: 700px){
	  .container {
  padding:10px 35px 0px 35px;
}
  .cancel {
     width: 100px;
	 position:left;
  }
  .cancelbtn {
  width: auto;
  background-color: #f44336;
  margin-left:70px;
}
}
</style>
</head>
<body>

<form action="login_teacher_php.php" method="post">
<div style= "background-color:#3377ff; padding:3px; margin-left:0px; margin-top:0px; width:100%">
<h2 style="text-align: center; font-size: 40px; color:white;">Login Form for Teacher</h2>
</div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" id="psw" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password" required><br>
	<input type="checkbox" onclick="myFunction()"style="text-align:right;">Show Password<br>
	<br>
		<a href="teacher_forgetpassword.php">Forget Password</a>
	<b>
	</select>	
    <br><br><button type="submit" id="myBtn"><b>Login</b></button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>
<form class="cnacel" action="logout.php" method="post" > 
  <div>
    <button type="submit" class="cancelbtn"><b>Logout</b></button>
  </div>
</form>
<script>
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