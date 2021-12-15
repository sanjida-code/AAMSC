<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Page</title>
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
	text-align: center;
    padding:30px;
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
	padding:0px;
	text-align:center;
	color:#3377ff;
	font-size:25px;
	margin-left:70px;
}
.routine tr{
     text-align:center;
}
.routine td{
	color:#3377ff;
}
.routine img{
	height:100px;
	width:100px;
	border-radius:100px;
	border: 5px solid #3377ff;
}
 img{

	border-radius:100px;
	border: 5px solid #3377ff;
}
h1{ 
    padding-left:20px;
	text-align:center;
	color:white;
}
h2{ 
    padding-left:20px;
	text-align:center;
	color:white;
}
.profile table{
	padding:0px;
	text-align:center;
	color:#3377ff;
	font-size:35px;
}
.profile tr{
     text-align:left;
}
.profile td{
	font-size:25px;
	color:white;
}
#t01{
	padding-left:25px;
}
#t01 table{
	width:800px;
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
	font-size:20px;
	color:white;
		border: 1px solid white;
	border-collapse: collapse;
	text-align:center;
}
#t01 th{
		padding:5px;
	font-size:20px;
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


#t03{
	padding-left:25px;
}
#t03 table{
	width:900px;
	text-align:center;
	color:#3377ff;
	border: 1px solid white;
	border-collapse: collapse;
}
#t03 tr{
		padding:5px;
     text-align:left;
	 	border: 1px solid white;
	border-collapse: collapse;
		text-align:center;
}
#t03 td{
		padding:5px;
	font-size:15px;
	color:white;
		border: 1px solid white;
	border-collapse: collapse;
	text-align:center;
}
#t03 th{
	padding:5px;
	font-size:15px;
	color:white;
	border: 1px solid white;
	border-collapse: collapse;
	text-align:center;
}
.edite a{
	padding:15px;
	background-color:#ff00ff;
	border-radius:5px;
	font-size:20px;
	text-decoration: none;
	color:#fff;
}
.edite a:hover
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
  </style>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">

<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-4" id="myScrollspy">
	 
      <ul class="nav nav-pills flex-column"> 
	  <div class="routine">
	  <h3>Anowar Ali Memorial <br>School & Collage</h3>
	   <h3>Student</h3>
    <table>

<?php
$servername="localhost" ;
$serveruser="root" ;
$serverpass="" ;
$DBname="aamsc" ;
$conn=mysqli_connect($servername , $serveruser , $serverpass , $DBname ) ;

 $sql= "select * from student_register where id_number=20001 and SL = 1";
 $result=$conn->query($sql) ;

while($row = mysqli_fetch_array($result))
  {
	   echo "<tr>";
  echo  "<td>"?> <img src="<?php echo  $row["image"];?>"><?php echo "</td>";
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
          <a class="nav-link active" href="#section1">Class Routine</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section2">Payment Account</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" href="#section3">Result</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section4">My Profile</a>
        </li>
      </ul>
    </nav>
    <div class="col-sm-9 col-8">
      <div id="section1" class="bg-success">    
        <h1>Student Class Routine</h1>
		<h2>Saturday to Wednesday</h2>
         <h2>Time: 10.00am - 4.00pm</h2>
		<div id="t01">
		 <table>
<thead>
<tr>
<th>Class</th>
<th>Class1</th>
<th>Class2</th>
<th>Class3</th>
<th>Class4</th>
<th>Break</th>
<th>Class5</th>
<th>Class6</th>
<th>Class7</th>
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

  echo "<tr>";
  echo "<td>" . $row['class_name'] . "</td>";
  echo "    ";
  echo "<td>" . $row['class1'] . "</td>";
  echo "    ";
  echo "<td>" . $row['class2'] . "</td>";
  echo "    ";
  echo "<td>" . $row['class3'] . "</td>";
  echo "    ";
  echo "<td>" . $row['class4'] . "</td>";
  echo "    ";
  echo "<td>" . $row['break'] . "</td>";
  echo "    ";
  echo "<td>" . $row['class5'] . "</td>"; 
  echo "    ";
  echo "<td>" . $row['class6'] . "</td>";
  echo "    ";
  echo "<td>" . $row['class7'] . "</td>";
  echo "    ";
  echo "</tr>";
  }
echo "</table>";

  echo "</br>";
    echo "</br>";
	?>
		
		
		</div>
      </div>
      <div id="section2" class="bg-warning"> 
        <h1>Account Details</h1>
	     <div>
		<div id="t02">
		 <table>
<thead>
<tr>
<th>SL</th>
<th>Payment Date</th>
<th>Reference</th>
<th>Particulars</th>
<th>Payment Mode</th>
<th>Amount(BDT)</th>
</tr>
</thead>

<?php
$servername="localhost" ;
$serveruser="root" ;
$serverpass="" ;
$DBname="aamsc" ;
$conn=mysqli_connect($servername , $serveruser , $serverpass , $DBname ) ;

 $sql= "select * from student_register where id_number=20001 ";
 $result=$conn->query($sql) ;

while($row = mysqli_fetch_array($result))
  {

  echo "<tr>";
  echo "<td>" . $row['SL'] . "</td>";
  echo "    ";
  echo "<td>" . $row['payment_date'] . "</td>";
  echo "    ";
  echo "<td>" . $row['reference'] . "</td>";
  echo "    ";
  echo "<td>" . $row['particulars'] . "</td>";
  echo "    ";
  echo "<td>" . $row['payment_mode'] . "</td>";
  echo "    ";
  echo "<td>" . $row['Amount_BDT'] . "</td>";
  echo "    ";
  echo "</tr>";
  }
echo "</table>";
	?>
		</div>
      </div>
</div>	


<div id="section3" class="bg-success">    
        <h1>Results</h1>
		<div id="t03">
		 <table>
<thead>
<tr>
<th>Class Name</th>
<th>Exam Name</th>
<th>Bangla</th>
<th>English</th>
<th>Math</th>
<th>Science</th>
<th>BGS</th>
<th>Religous</th>
<th>ICT</th>
</tr>
</thead>

<?php
$servername="localhost" ;
$serveruser="root" ;
$serverpass="" ;
$DBname="aamsc" ;
$conn=mysqli_connect($servername , $serveruser , $serverpass , $DBname ) ;

 $sql= "select * from student_register where id_number=20001";
 $result=$conn->query($sql) ;

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['class_name'] . "</td>";
  echo "    ";
  echo "<td>" . $row['exam_name'] . "</td>";
  echo "    ";
  echo "<td>" . $row['bangla'] . "</td>";
  echo "    ";
  echo "<td>" . $row['english'] . "</td>";
  echo "    ";
  echo "<td>" . $row['math'] . "</td>";
  echo "    ";
  echo "<td>" . $row['science'] . "</td>";
  echo "    ";
  echo "<td>" . $row['bgs'] . "</td>"; 
  echo "    ";
  echo "<td>" . $row['religous'] . "</td>";
  echo "    ";
  echo "<td>" . $row['ict'] . "</td>";
  echo "    ";
  echo "</tr>";
  }
echo "</table>";

  echo "</br>";
    echo "</br>";
	?>
		
		
    </div>
</div>


  
      <div id="section4" class="bg-secondary">         
        <h1>My Profile</h1>
        <div class="profile" style="margin-left:275px;">
		
		 <table style="text-align:left;">
		 


<?php
$servername="localhost" ;
$serveruser="root" ;
$serverpass="" ;
$DBname="aamsc" ;
$conn=mysqli_connect($servername , $serveruser , $serverpass , $DBname ) ;

 $sql= "select * from student_register where id_number=20001 and SL = 1";
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
     echo "<td>" . "Birth ID Number:" . "</td>";
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
	 <a href="edit_student20001.php">Edit</a> 
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