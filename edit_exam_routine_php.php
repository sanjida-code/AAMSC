<?php
$servername="localhost" ;
$serveruser="root" ;
$serverpass="" ;
$DBname="aamsc" ;
$conn=mysqli_connect($servername , $serveruser , $serverpass , $DBname ) ;
if(!$conn){
die("error in connection") ;
}
else{
    echo "ok done </br>" ;
}
		if(!mysqli_select_db($conn, 'aamsc'))
		{
			echo 'database not selected';
		}
		$SL = $_POST['SL'];
		$time =$_POST['time'];
		$class_name = $_POST['class_name'];
		$subject = $_POST['subject'];
		$date = $_POST['date'];


 $sql= "insert into exam_routine (SL, time, class_name, subject, date)values('$SL', '$time', '$class_name', '$subject', '$date') ";
 $result=$conn->query($sql) ;
 if($result){
	 echo "form submitted";
 }
 else{
	 echo "form not submitted";
 }
 header("refresh:2 url= admin4001.php");
?>