<html>
<head>
<title>Student Account </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
<style>
#t02{
	padding-left:100px;
}
#t02 table{
    width:800px;
	text-align:center;
	color:#3377ff;
	border: 1px solid black;
	border-collapse: collapse;
}
#t02 tr{
		padding:5px;
     text-align:left;
	 	border: 1px solid black;
	border-collapse: collapse;
		text-align:center;
}
#t02 td{
		padding:5px;
	font-size:20px;
	color:black;
		border: 1px solid black;
	border-collapse: collapse;
	text-align:center;
}
#t02 th{
		padding:5px;
	font-size:20px;
	color:\black;
		border: 1px solid black;
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
<center>
<h1>Student  Results Class </h1>
<h2>Student ID, Class Name, Exam Name only Edit/Update and Add</h2><br>
<hr><br>
<div id="t02">
<table>
<thead>
<tr>
<th>SL</th>
<th>Student ID</th>
<th>Class Name</th>
<th>Exam Name</th>
<th>Bangla</th>
<th>English</th>
<th>Math</th>
<th>Science</th>
<th>BGS</th>
<th>Religous</th>
<th>ICT</th>
<th>Edit/Update</th>

</tr>
</thead>

<?php
$servername="localhost" ;
$serveruser="root" ;
$serverpass="" ;
$DBname="aamsc" ;
$conn=mysqli_connect($servername , $serveruser , $serverpass , $DBname ) ;

 $sql= "select * from student_register ";
 $result=$conn->query($sql) ;

while($row = mysqli_fetch_array($result))
  {
?>
  <tr>
  <td><?php echo $row['SL'];  ?></td>  
  <td><?php echo $row['id_number'];  ?></td>
  <td><?php echo $row['class_name'];  ?></td>
  <td><?php echo $row['exam_name']; ?></td>
  <td><?php echo $row['bangla']; ?></td>
  <td><?php echo $row['english'] ; ?></td>
  <td><?php echo $row['math']; ?></td>
  <td><?php echo $row['science']; ?></td>
  <td><?php echo $row['bgs'] ; ?></td>
  <td><?php echo $row['religous']; ?></td>
  <td><?php echo $row['ict']; ?></td>  
  <td> 
       <form action = "result_six_edit.php" method = "post">
        <input type = "hidden" name = "edit_id" value = "<?php echo $row['SL'];  ?>">
        <button type ="submit" name= "edit_btn"  class="btn btn-info">Edit/Update</button>
		</form>
  </td>

  </tr>
  <?php
  }
echo "</table>";
?>
        <br>
		<form action = "result_six_add.php" method = "post" style="padding-top:30px;">
        <button type ="submit" name= "edit_btn"  class="btn btn-success">Add</button>
		</form>

		
	</div>
	
</center>	
<div class="teacherpage">
	 <a href="admin4001.php">Back</a>	
	 </div>
</body>
</html>	