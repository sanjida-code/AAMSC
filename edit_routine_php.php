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
		$time = $_POST['time'];
		$class1 =$_POST['class1'];
		$class2 = $_POST['class2'];
		$class3 = $_POST['class3'];
		$class4 = $_POST['class4'];
		$break = $_POST['break'];
		$class5 = $_POST['class5'];
		$class6 = $_POST['class6'];
		$class7 =$_POST ['class7'];

 $sql= "UPDATE routine SET time = '$time', class1 = '$class1', class2 ='$class2',class3 = '$class3',class4 = '$class4', break = '$break', class5 = '$class5', class6 = '$class6', class7 = '$class7' WHERE time = '$time' ";
 $result=$conn->query($sql) ;
 if($result){
	 echo "form submitted";
 }
 else{
	 echo "form not submitted";
 }
 header("refresh:2 url= admin4001.php");
?>