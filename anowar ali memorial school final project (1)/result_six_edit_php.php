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
		$id_number = $_POST['id_number'];
		$class_name =$_POST['class_name'];
		$exam_name= $_POST['exam_name'];


 $sql= "UPDATE student_register SET  id_number = '$id_number', class_name ='$class_name', exam_name = '$exam_name' WHERE SL = '$SL' ";
 $result=$conn->query($sql) ;
 if($result){
	 echo "form submitted";
 }
 else{
	 echo "form not submitted";
 }
 header("refresh:2 url= student_results_six.php");
?>