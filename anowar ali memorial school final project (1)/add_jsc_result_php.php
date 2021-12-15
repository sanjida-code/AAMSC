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
		$name =$_POST['name'];
		$id = $_POST['id'];
		$result = $_POST['result'];
		$year = $_POST['year'];


 $sql= "insert into jsc_result (SL, name, id, result, year) values ('$SL', '$name', '$id', '$result', '$year')";
 $result=$conn->query($sql) ;
 if($result){
	 echo "form submitted";
 }
 else{
	 echo "form not submitted";
 }
 header("refresh:2 url= admin4001.php");
?>