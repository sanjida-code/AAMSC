<html>
<head>
<title>Staff Account </title>
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
<h1>Staff Account Details</h1>
<br><br><br>
<div id="t02">
<table>
<thead>
<tr>
<th>SL</th>
<th>Id Number</th>
<th>Payment Date</th>
<th>Reference</th>
<th>Particulars</th>
<th>Payment Mode</th>
<th>Amount(BDT)</th>
<th>Edit/Update</th>
<th>Delete</th>
</tr>
</thead>

<?php
$servername="localhost" ;
$serveruser="root" ;
$serverpass="" ;
$DBname="aamsc" ;
$conn=mysqli_connect($servername , $serveruser , $serverpass , $DBname ) ;

 $sql= "select * from staff_register";
 $result=$conn->query($sql) ;

while($row = mysqli_fetch_array($result))
  {
?>
  <tr>
  <td><?php echo $row['SL']; ?></td>
    <td><?php echo $row['id_number']; ?></td>
  <td><?php echo $row['payment_date']; ?></td>
  <td><?php echo $row['reference']; ?></td>
  <td><?php echo $row['particulars']; ?></td>
  <td><?php echo $row['payment_mode']; ?></td>
  <td><?php echo $row['Amount_BDT']; ?></td>
  
  <td> 
       <form action = "staff_account_edit.php" method = "post">
        <input type = "hidden" name = "edit_id" value = "<?php echo $row['SL'];  ?>">
        <button type ="submit" name= "edit_btn"  class="btn btn-info">Edit/Update</button>
		</form>
  </td>
  
  <td>
     <form action = "staff_account_delete.php" method = "post">
        <input type = "hidden" name = "delete_id" value = "<?php echo $row['SL'];  ?>">
        <button type ="submit" name= "delete_btn"  class="btn btn-danger">Delete</button>
		</form>
  </td>
  </tr>
  <?php
  }
echo "</table>";
?>
        
		<form action = "staff_account_add.php" method = "post" style="padding-top:30px;">
        <button type ="submit" name= "edit_btn"  class="btn btn-success">Add</button>
		</form>

		
	</div>
	
</center>	
<div class="teacherpage">
	 <a href="admin4001.php">Back</a>	
	 </div>
</body>
</html>	