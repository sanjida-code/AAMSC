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
<h1>Student Data For Admission</h1>

<div id="t02">
<table>
<thead>
<tr>
<th>Image</th>
<th>Class Name</th>
<th>Student name</th>
<th>Mother name</th>
<th>Father name</th>
<th>Birth day</th>
<th>Email</th>
<th>Address</th>
<th>Gender</th>
<th>Phone</th>
</tr>
</thead>

<?php
$servername="localhost" ;
$serveruser="root" ;
$serverpass="" ;
$DBname="aamsc" ;
$conn=mysqli_connect($servername , $serveruser , $serverpass , $DBname ) ;

 $sql= "select * from admission_apply";
 $result=$conn->query($sql) ;

while($row = mysqli_fetch_array($result))
  {
?>

  <td> <img src="<?php echo $row['image'];?>" style="width:100px; height:100px;"></td>
    <td><?php echo $row['cname'];  ?></td>
  <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['mname']; ?></td>
	  <td><?php echo $row['fname']; ?></td>
  <td><?php echo $row['birth_date'] ; ?></td>
  <td><?php echo $row['email']; ?></td>
  <td><?php echo $row['address']; ?></td>
  <td><?php echo $row['gender'] ; ?></td>
  <td><?php echo $row['phone']; ?></td> 

  </tr>
  <?php
  }
echo "</table>";
?>
	</div>
	
</center>	
<div class="teacherpage">
	 <a href="admin4001.php">Back</a>	
	 </div>
</body>
</html>	