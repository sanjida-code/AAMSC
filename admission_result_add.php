<html>
  <title>Admin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<head>
<style>
#t01{
	padding:5px;
}
#t01 table{
	margin:auto;
     		padding:5px;
	text-align:center;
	color:#3377ff;
	border: 1px solid blue;
	border-collapse: collapse;
}
#t01 tr{
		padding:5px;
     text-align:left;
	 	border: 1px solid blue;
	border-collapse: collapse;
		text-align:center;
}
#t01 td{
		padding:5px;
	font-size:15px;
	color:blue;
		border: 1px solid blue;
	border-collapse: collapse;
	text-align:center;
}
#t01 th{
		padding:5px;
	font-size:15px;
	color:blue;
		border: 1px solid blue;
	border-collapse: collapse;
		text-align:center;
}
.teacherpage{
    text-align:left;
     margin-left: 100px;
     margin-top: 200px;
}
.teacherpage a{
	padding:10px;
	background-color:#6699ff;
	border-radius:5px;
	font-size:30px;
	text-decoration: none;
	color:#fff;
}
.teacherpage a:hover
{
	background: #ff00ff;
	border-radius:5px;
}

</style>
</head>
<body>
<center><h1>Admission Results</h1></center>
	   <div  class="edite"  id="t01">	
<table>
<thead>
<tr>
<th>SL</th>
<th>Class Name</th>
<th>ID</th>
<th>Student Name</th>
<th>Delete</th>
</tr>
</thead>

<?php
$servername="localhost" ;
$serveruser="root" ;
$serverpass="" ;
$DBname="aamsc" ;
$conn=mysqli_connect($servername , $serveruser , $serverpass , $DBname ) ;

 $sql= "select * from admission_result";
 $result=$conn->query($sql) ;

while($row = mysqli_fetch_array($result))
  {
?>
  <tr>
  <td><?php echo $row['SL']; ?></td>
  <td><?php echo $row['class_name']; ?></td>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['student_name']; ?></td>
  
  <td>
     <form action = "delete_admission_result_php.php" method = "post">
        <input type = "hidden" name = "delete_id" value = "<?php echo $row['SL'];  ?>">
        <button type ="submit" name= "delete_btn"  class="btn btn-danger">Delete</button>
		</form>
  </td>
  </tr>
  <?php
  }
  ?>

</table>
<center>
       <form action = "add_admission_result.php" method = "post">
        <input type = "hidden" name = "edit_id" value = "<?php echo $row['SL'];  ?>">
        <button type ="submit" name= "edit_btn"  class="btn btn-info">ADD</button>
		</form>
	</center>
	

</div>
<div class="teacherpage">
	 <a href="admin4001.php">Back</a>	
	 </div>
</body>
</html>