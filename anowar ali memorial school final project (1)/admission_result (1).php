<html>
<head> 
<meta name ="viewport" content =" with=device-width, initial-scale=1.0">
<title> Anowar Ali Memorial School & Collage</title>
<link rel="stylesheet" href="style.php">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

table{
	width:100%;
	margin:auto;
    padding:5px;
	text-align:center;
	color:#3377ff;
	border: 1px solid #3377ff;
	border-collapse: collapse;
}
tr{
		padding:5px;
     text-align:left;
	 	border: 1px solid #3377ff;
	border-collapse: collapse;
		text-align:center;
}
td{
		padding:5px;
	font-size:15px;
	color:#3377ff;
		border: 1px solid #3377ff;
	border-collapse: collapse;
	text-align:center;
}
th{
		padding:5px;
	font-size:15px;
	color:#3377ff;
		border: 1px solid #3377ff;
	border-collapse: collapse;
		text-align:center;
}
</style>
</head>


<body>
<section class ="header" id ="nav-bar">
<nav>
<div Class="logo">
<a href ="homepage.php"><img src="logo.jpg" style="height:100px; width:150px;"></a>
<h1>Anowar Ali Memorial School & College</h1>
</div>
<div class ="menu-bar">
<ul>
<li><a href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>About Us</a>
    <div class= "sub-manu-1">
        <ul>
             <li><a href="message_principal.php">Messege From Principal</a></li>
             <li><a href="our_teacher.php">Our Teachers</a></li>
             <li><a href="history.php">History</a></li>
        </ul>
    </div>
</li>

<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Academic</a>
     <div class= "sub-manu-1">
         <ul>
             <li><a href="ac_calender.php">Academic Calender</a></li>
             <li><a href="syllabus.php">Syllabus</a></li>
             <li><a href="class_routine.php">Class Routine</a></li>
             <li><a href="exam_routine.php">Exam Routine</a></li>
             <li><a href="dress_code.php">Dress Code</a></li>
			 <li class="hover-me"><a href="#">Result</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                 <div class= "sub-manu-2">
                     <ul>
                         <li><a href="result_jsc.php">JSC</a></li>
                         <li><a href="result_ssc.php">SSC</a></li>
                     </ul>
                 </div>
            </li>
			<li class="hover-me"><a href="#">Library</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                 <div class= "sub-manu-2">
                     <ul>
                         <li><a href="online_book.php">Online Library</a></li>
                         <li><a href="video_tutorial.php">Video tutorial</a></li>
                     </ul>
                 </div>
             </li>
         </ul>
     </div>
</li>
<li  class="active"><a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i>Admission</a>
      <div class= "sub-manu-1">
        <ul>
        <li><a href="admission_circular.php">Admission Circuler</a></li>
        <li><a href="admission_apply.php">Apply Now</a></li>
        <li><a href="admission_result.php">Admission Result</a></li>
        </ul>
      </div>
</li>

<li><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>Gallery</a>
<div class= "sub-manu-1">
<ul>
<li><a href="photo.php">Photo</a></li>
<li><a href="video.php">video</a></li>
</ul>
</div>
</li>
<li><a href="fee.php"><i class="fa fa-money" aria-hidden="true"></i>Fee/Payment</a></li>
<li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i>Contact</a></li>
<li><a href="#"><i class="fa fa-unlock-alt" aria-hidden="true"></i>Portals</a>
<div class= "sub-manu-1">
<ul>
<li><a href="teacherpage.php">Teacher</a></li>
<li><a href="studentpage.php">Student</a></li>
<li><a href="staffpage.php">Staff</a></li>
<li><a href="adminpage.php">Admin</a></li>
</ul>
</div>
</li>

</ul>
</div>
</nav>
</section>

<section style="padding:100px;" id = "section2">
<h1>Admission Result</h1>

<table>
<thead>
<tr>
<th>SL</th>
<th>Class Name</th>
<th>ID</th>
<th>Student Name</th>
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
  </tr>
  <?php
  }
  ?>

</table>


</section>

<section class="footer">
<div class="row">
     
	  <div class= "loca">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11457.870187761751!2d90.7803960683194!3d23.28753039792624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754f7aaf9ee00c1%3A0xb475d7a00d1d5a5!2sSharif%20store!5e0!3m2!1sbn!2sbd!4v1617942137757!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> </div>
	 <div>
	 <h4>Anowar Ali Memorial School & Collage</h4>
      <p>Teker Bazar,<br> Hajigoang<br>Chandpur</p>
	  	 </div>
	 <div>
      <h4>SERVICES</h4>
		 <p>Admission<br>
            Result<br>
            Fee/Payment<br>
            Academic</p>
		 </div>
	 <div>
	     <h4>CONTACT US</h4>
		 <p> Email: shakhawathossain73@gmail.com<br>
		  Phone: +8801864172286, +8801690204886<br>
		  Address: 3610,Teker Bazar,<br>Hajigoang,Chandpur</p>
	 </div>
</div>
<div class="icons">
<i class="fa fa-facebook" ></i>
<i class="fa fa-twitter" ></i>
<i class="fa fa-instagram" ></i>
<i class="fa fa-linkedin" ></i>
</div>
<p style="text-align:center;">Made with <i class="fa fa-heart-o"></i> by Sanjida Akter</p>
</section>

</body>
</html>



