  <!DOCTYPE HTML>  
<html>
<title>Add Form</title>
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
<form  method="post" action="result_six_add_php.php" style="padding-top:50px;heigth:100%;" >  

<table style="margin:auto;">
  <tr>
  <td>SL: </td><td><input type="number" name="SL" value=" ">
  </td>
<tr>
  <td>Id Number: </td><td><input type="number" name="id_number" value=" ">
  </td>
  <tr>
  <td>Class Name: </td><td><input type="text" name="class_name" value=" ">
  </td>
  </tr>
  <td>Exam Name: </td><td>		
		<input type="radio"  name="exam_name" value="Half-Year-Final ">Half-Year-Final<br>
        <input type="radio"  name="exam_name" value="Year-Final ">Year-Final<br></td>
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