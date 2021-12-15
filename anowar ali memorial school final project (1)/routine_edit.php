  <!DOCTYPE HTML>  
<html>
<title>Edit Form</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<head>
<style>
body {background: lightblue;margin-top:30px;}
.error {color: #FF0000;}

</style>
</head>
<body >  
<div style="margin:0px 300px 0px 300px; padding:5px; border-radius:50px;
	border: 7px solid #3377ff; background:lightpink;">
<center>
<form  method="post" action="edit_routine_php.php" style="padding-top:50px;heigth:100%;" >  

<table style="margin:auto;">
  <tr>
  <td>Time: </td><td><input type="text" name="time" value="Time">
  </td>
<tr>
  <td>Class1: </td><td><input type="text" name="class1" value="class1 Name">
  </td>
  <tr>
  <td>Class2: </td><td><input type="text" name="class2" value="class2 Name">
  </td>
  </tr>
  <td>Class3: </td><td><input type="text" name="class3" value="class3 Name">
  </td>
<tr>
  <tr>
  <td>Class4: </td><td><input type="text" name="class4" value="class4 Name">
  </td>
  </tr>
   <tr>
  <td>Break: </td><td><input type="text" name="break" value="Break">
  </td>
  </tr>
  <tr>
  <td>Class5: </td><td><input type="text" name="class5" value="class5 Name">
  </td>
  </tr>
  <tr>
  <td>Class6: </td><td><input type="text" name="class6" value="class6 Name">
  </td>
  </tr>
  <tr> 
   <td>Class7: </td><td><input type="text" name="class7" value="class7 Name">
  </td>
  </tr>
  
</table>  
<br>
  <input type="submit" name="submit" value="Submit" style="padding:15px; background:#3377ff;color:white;"> 
<br><br>
<br><br>
</form>
</center>
</div>


</body>
</html>