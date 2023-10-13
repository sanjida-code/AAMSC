<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
 <style>
  body {
    position: relative;
	background:black;
  }
  ul.nav-pills {
	background:black;
    top: 0px;
    position:fixed;
	text-align:center;
    padding:3px;
  }
  div.col-8 div {
    height: 800px;
  }
.routine h3{
	color:#3377ff;
	margin-left:0px;
	margin-top:0px;
}
.routine table{
	text-align:center;
	color:#3377ff;
	font-size:25px;
	margin:auto;
}
.routine tr{
     text-align:center;
}
.routine td{
	color:#3377ff;
}
img{
	border-radius:100px;
	border: 5px solid #3377ff;
}



@media(max-width: 700px){

  .bg-success{
	  padding:10px;
	  width:1200px;
	   margin-left:150px;
  }
  .bg-warning{
	  width:1200px;
	  margin-left:150px;
  }
  .bg-secondary{
	  width:1200px;
	  margin-left:150px;
  }
}
h1{ 
    margin:auto;
    padding:40px;
	text-align:center;
	color:white;
}
h2{ 
    padding:20px;
	text-align:center;
	color:white;
}
.profile table{
	padding:0px;
	text-align:center;
	color:#3377ff;
	font-size:25px;
}
.profile tr{
     text-align:left;
}
.profile td{
	font-size:20px;
	color:white;
}
#t01{
	padding:5px;
}
#t01 table{
	margin:auto;
    padding:5px;
	text-align:center;
	color:#3377ff;
	border: 1px solid white;
	border-collapse: collapse;
}
#t01 tr{
		padding:5px;
     text-align:left;
	 	border: 1px solid white;
	border-collapse: collapse;
		text-align:center;
}
#t01 td{
		padding:5px;
	font-size:15px;
	color:white;
		border: 1px solid white;
	border-collapse: collapse;
	text-align:center;
}
#t01 th{
		padding:5px;
	font-size:15px;
	color:white;
		border: 1px solid white;
	border-collapse: collapse;
		text-align:center;
}
#t02{
	padding-left:100px;
}
#t02 table{
    width:800px;
	text-align:center;
	color:#3377ff;
	border: 1px solid white;
	border-collapse: collapse;
}
#t02 tr{
		padding:5px;
     text-align:left;
	 	border: 1px solid white;
	border-collapse: collapse;
		text-align:center;
}
#t02 td{
		padding:5px;
	font-size:20px;
	color:white;
		border: 1px solid white;
	border-collapse: collapse;
	text-align:center;
}
#t02 th{
		padding:5px;
	font-size:20px;
	color:white;
		border: 1px solid white;
	border-collapse: collapse;
		text-align:center;
}
.edite a{
	padding:10px;
	background-color:#6699ff;
	border-radius:5px;
	font-size:20px;
	text-decoration: none;
	color:#fff;
}
.edite a:hover
{
	background: #ff00ff;
	border-radius:5px;
}
.edit a{
    padding:2px;
	background-color:#ff00ff;
	border-radius:5px;
	font-size:20px;
	text-decoration: none;
	color:#fff;
}
.edit a:hover
{
	background: #6699ff;
	border-radius:5px;
}


.cancelbtn {
  width: auto;
  	color:#fff;
  background-color: #f44336;
  margin-left:500px;
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
  </style>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">

<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-4" id="myScrollspy">
	 
      <ul class="nav nav-pills flex-column"> 
	  <div class="routine">
	  <h3>Anowar Ali Memorial <br>School & Collage</h3>
	   <h3>Admin</h3>
    <table>

<?php
$servername="localhost" ;
$serveruser="root" ;
$serverpass="" ;
$DBname="aamsc" ;
$conn=mysqli_connect($servername , $serveruser , $serverpass , $DBname ) ;

 $sql= "select * from admin_register where id_number=4001";
 $result=$conn->query($sql) ;

while($row = mysqli_fetch_array($result))
  {
	   echo "<tr>";
  echo  "<td>"?> <img src="<?php echo  $row["image"];?>" style="width:120px; height:120px;"><?php echo "</td>";
  echo "    ";
    echo "</tr>";
   echo "<tr>";
  echo "<td>" . $row['id_number'] . "</td>";
  echo "    ";
    echo "</tr>";
   echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
    echo "    ";
	  echo "</tr>";
  echo "</br>";

  }
echo "</table>";

  echo "</br>";
    echo "</br>";
	?>
      </div>
	    <li class="nav-item">
          <a class="nav-link" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#section1">Class Routine Managment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section2">Payment Account Managment</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#section3">Result Managment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section4">contact Managment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section5">My Profile</a>
        </li>
      </ul>
    </nav>
    <div class="col-sm-9 col-8">
      <div id="section1" class="bg-success">    
   <div id="t01">
        <h1>Class Routine</h1>
		<hr>
         <h2>Time: 10.00am - 4.00pm</h2>
		
<table>
<thead>
<tr>
<th>Time</th>
<th>Class1</th>
<th>Class2</th>
<th>Class3</th>
<th>Class4</th>
<th>Break</th>
<th>Class5</th>
<th>Class6</th>
<th>Class7</th>
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

 $sql= "select * from routine";
 $result=$conn->query($sql) ;

while($row = mysqli_fetch_array($result))
  {
?>
  <tr>
  <td><?php echo $row['time']; ?></td>
  <td><?php echo $row['class1']; ?></td>
  <td><?php echo $row['class2']; ?></td>
  <td><?php echo $row['class3']; ?></td>
  <td><?php echo $row['class4']; ?></td>
  <td><?php echo $row['break']; ?></td>
  <td><?php echo $row['class5']; ?></td>
  <td><?php echo $row['class6']; ?></td>
  <td><?php echo $row['class7']; ?></td>
  
  <td> 
       <form action = "routine_edit.php" method = "post">
        <input type = "hidden" name = "edit_id" value = "<?php echo $row['time'];  ?>">
        <button type ="submit" name= "edit_btn"  class="btn btn-info">Edit/Update</button>
		</form>
  </td>
  
  <td>
     <form action = "delete_routine_php.php" method = "post">
        <input type = "hidden" name = "delete_id" value = "<?php echo $row['time'];  ?>">
        <button type ="submit" name= "delete_btn"  class="btn btn-danger">Delete</button>
		</form>
  </td>
  </tr>
  <?php
  }
  ?>

</table>

</div>
 </div>
      <div id="section2" class="bg-warning"> 
        <h1><b>Account Details</b></h1>
		<hr>
	     <div>
		
		    <div class="edite">
     <center>
	 <br><br><br>
	<a href="student_account.php">Student Account</a><br><br><br>
	
		<a href="teacher_account.php">Teacher Account</a><br><br><br>
	
		<a href="staff_account.php">Staff Account</a><br><br><br>
	
	 <a href="admin_account.php">Admin Account</a>
	 
	 </center>
        
		</div>
      </div>
    </div>	  
<div id="section3" class="bg-success">    
   <div id="t01">
        <h1>Profile & Results Management</h1>
		<hr>
	<div class="edite">
     <center>
	 <br>
	 <a href="student_results.php"> Student Results</a><br><br><br>
	 
	 <a href="student_profile_data.php">Register Student Details</a><br><br><br>

	 <a href="teacher_profile_data.php">Register Teacher Details</a><br><br><br>

	 <a href="staff_profile_data.php">Register Staff Details</a><br><br><br>

	 <a href="admin_profile_data.php">Register Admin Details</a><br><br><br>
	 </center>
    </div>
</div>
 </div>	
	
<div id="section4" class="bg-warning">    
   <div  class="edite"  id="t01">
           <h1>Contact & Admission Management</h1>
		<hr>
   <br>
        <center><a href="contact_show.php">Contact Request</a></center><br><br>
	  <center><a href="Exam_Routine_add.php">Exam Routine</a></center><br><br>
  <center><a href="add_jsc_ssc_result.php">JSC & SSC Result Add</a></center><br><br>
    <center><a href="admission_apply_details.php">Admission Apply Details</a></center><br><br>
      <center><a href="admission_result_add.php">Admission Results Add</a></center><br><br>
<table>	
<form  method="post" action="ac_calender_php.php" style="color:white; margin:30px;" >  	
<tr>
 <td> <strong>Academic Calender:</strong></td> 
<td><input type="file" name="image" value=" "></td> 
<td><button type="submit" id="myBtn"><b>Add</b></button></td>
</tr>
</form>	
<form  method="post" action="syllabus_php.php" style="color:white; margin:30px;" >  	
 <tr>
<td> <strong>Syllabus:</strong> </td> 
<td><input type="file" name="image" value=" "></td>
<td><button type="submit" id="myBtn"><b>Add</b></button></td>
</tr>
</form>		
<form  method="post" action="admission_circular_php.php" style="color:white; margin:30px;" >  	
 <tr>
 <td><strong>Admission Circular:</strong></td> 
<td> <input type="file" name="image" value=" "></td> 
<td>
	<button type="submit" id="myBtn"><b>Add</b></button></td>
</tr>
</form>
</table>

</div>	
</div>	
	
      <div id="section5" class="bg-secondary">         
        <h1>My Profile</h1>
		<hr>
        <div class="profile" style="margin-left:275px;">
		
<table style="text-align:left;">
		 


<?php
$servername="localhost" ;
$serveruser="root" ;
$serverpass="" ;
$DBname="aamsc" ;
$conn=mysqli_connect($servername , $serveruser , $serverpass , $DBname ) ;

 $sql= "select * from admin_register where id_number=4001";
 $result=$conn->query($sql) ;

while($row = mysqli_fetch_array($result))
  {

  echo "<tr >";
  
  echo  "<td>"?> <img src="<?php echo  $row["image"];?>" style="width:200px; height:200px;"><?php echo "</td>";
  echo "    ";
      echo "</tr>";
	  echo "<tr>";
	  echo "<td>" . "ID Number:" . "</td>";
      echo "<td>" . $row['id_number'] . "</td>";
      echo "    ";
 echo "</tr>";
 echo "<tr>";
     echo "<td>" . "Name:" . "</td>";
     echo "<td>" . $row['username'] . "</td>";
     echo "    "; 
echo "</tr>";	
echo "<tr>";
     echo "<td>" . "National ID Number:" . "</td>";
   echo "<td>" . $row['id'] . "</td>";
  echo "    ";  
  echo "</tr>";
    echo "<tr>";
	     echo "<td>" . "Birth Date:" . "</td>";
  echo "<td>" . $row['birth_date'] . "</td>";
  echo "    "; 
  echo "</tr>";
    echo "<tr>";
  echo "<td>" . "Email:" . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "    "; 
  echo "</tr>";
    echo "<tr>";
  echo "<td>" . "Phone:" . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "    ";
  echo "</tr>";
    echo "<tr>";
  echo "<td>" . "Gender:" . "</td>";
  echo "<td>" . $row['gender'] . "</td>"; 
  echo "    "; 
  echo "</tr>";
    echo "<tr>";
	echo "<td>" . "Address:" . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "    "; 
	echo "</tr>";
	echo "<tr>"; 
    echo "<td>" . "Password:" . "</td>";
	
  echo "<td>" . $row['password'] . "</td>";
  echo "</br>";
  echo "</tr>";
  }
echo "</table>";

  echo "</br>";
    echo "</br>";
	?>
		<div class="edite">
	 <a href="edit_admin4001.php">Edit</a> 
	 <form class="cnacel" action="logout.php" method="post" > 
  <div>
    <button type="submit" class="cancelbtn"><b>Logout</b></button>
  </div>
</form>
</div>
		</div>
      </div>
    </div>
  </div>
</div>

</body>
</html>