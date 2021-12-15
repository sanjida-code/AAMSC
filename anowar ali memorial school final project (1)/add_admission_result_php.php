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
		$class_name =$_POST['class_name'];
		$id = $_POST['id'];
		$student_name = $_POST['student_name'];



 $sql= "insert into admission_result (SL, class_name, id, student_name ) values ('$SL', '$class_name', '$id', '$student_name')";
 $result=$conn->query($sql) ;
 if($result){
	 echo "form submitted";
 }
 else{
	 echo "form not submitted";
 }
 header("refresh:2 url= admin4001.php");
?>