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
		$id_number = $_POST['id_number'];
		$bangla = $_POST['bangla'];

 $sql= "UPDATE student20001_result SET  bangla = '$bangla' where id_number = '$id_number' ";
 $result=$conn->query($sql) ;
 if($result){
	 echo " submitted";
 }
 else{
	 echo "not submitted";
 }

?>