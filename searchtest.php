
<?php
$servername="localhost" ;
$serveruser="root" ;
$serverpass="" ;
$DBname="aamsc" ;
$conn=mysqli_connect($servername , $serveruser , $serverpass , $DBname ) ;
if(!$conn)
    die("error in connection") ;
else
    echo "ok done </br>" ;


if(isset($_POST['search'])){
	
	$search=$_POST['search'];

 $sql= "select * from search where search='".$search."'  limit 1";
 $result=$conn->query($sql) ;
 $row = mysqli_fetch_array($result);
 if($row['search'] == $search )
 {
	 if($row['search'] == $search && $row['id_number'] == 1)
	 {header('location: photo.php');}
	 elseif($row['search'] == $search && $row['id_number'] == 2)
	 {header('location: video.php');}
	 elseif($row['search'] == $search && $row['id_number'] == 3)
	 {header('location: contact.php');}
	 elseif($row['search'] == $search && $row['id_number'] == 4)
	 {header('location: fee.php');}
	 elseif($row['search'] == $search && $row['id_number'] == 5)
	 {header('location: admission_circular.php');}
	 elseif($row['search'] == $search && $row['id_number'] == 6)
	  {header('location: admission_apply.php');}
	 elseif($row['search'] == $search && $row['id_number'] == 7)
	  {header('location: admission_result.php');}
	  	 elseif($row['search'] == $search && $row['id_number'] == 8)
	 {header('location: message_principal.php');}
	 elseif($row['search'] == $search && $row['id_number'] == 9)
	 {header('location: our_teacher.php');}
	 elseif($row['search'] == $search && $row['id_number'] == 10)
	 {header('location: history.php');}
	 elseif($row['search'] == $search && $row['id_number'] == 11)
	 {header('location: ac_calender.php');}
	 elseif($row['search'] == $search && $row['id_number'] == 12)
	  {header('location: syllabus.php');}
	 elseif($row['search'] == $search && $row['id_number'] == 13)
	  {header('location: class_routine.php');}
	 elseif($row['search'] == $search && $row['id_number'] == 14)
	 {header('location: exam_routine.php');}
	 elseif($row['search'] == $search && $row['id_number'] == 15)
	 {header('location: dress_code.php');}
	 elseif($row['search'] == $search && $row['id_number'] == 16)
	 {header('location: result_jsc.php');}
	 elseif($row['search'] == $search && $row['id_number'] == 17)
	 {header('location: result_ssc.php');}
	 elseif($row['search'] == $search && $row['id_number'] == 18)
	  {header('location: online_book.php');}
	 elseif($row['search'] == $search && $row['id_number'] == 19)
	  {header('location: video_tutorial.php');}
     else{
	 echo "you input incorrect value";
	 exit();}
 }
 }

     else{
	 echo "you input incorrect value";
	 exit();}
   ?>