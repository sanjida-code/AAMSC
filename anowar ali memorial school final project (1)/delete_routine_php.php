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
		
if(isset($_POST['delete_btn'])){
		
		$time = $_POST['delete_id'];
		
 $sql= "delete from routine where time = '$time' ";
 $result=$conn->query($sql);
 


 if($result){
	 echo "form submitted";
 }
 else{
	 echo "form not submitted";
 }
 header("refresh:2 url= admin4001.php");
 }
?>