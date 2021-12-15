<html>  
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
  <div id="t01">
        <h1>Contact Request</h1>
		<hr>
		
<table>
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
</tr>
</thead>

<?php
$servername="localhost" ;
$serveruser="root" ;
$serverpass="" ;
$DBname="aamsc" ;
$conn=mysqli_connect($servername , $serveruser , $serverpass , $DBname ) ;

 $sql= "select * from contact";
 $result=$conn->query($sql) ;

while($row = mysqli_fetch_array($result))
  {
?>
  <tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['email']; ?></td>
  <td><?php echo $row['subject']; ?></td>
  <td><?php echo $row['message']; ?></td>
  </tr>
  <?php
  }
  ?>

</table>

</div>
<div class="teacherpage">
	 <a href="admin4001.php">Back</a>	
	 </div>
</body>
</html>