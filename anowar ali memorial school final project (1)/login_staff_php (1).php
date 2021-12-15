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

if(isset($_POST['username'])){
	
	$uname=$_POST['username'];
	$password=$_POST['password'];

 $sql= "select * from staff_register where username='".$uname."' AND password='".$password."' limit 1";
 $result=$conn->query($sql) ;
 $row = mysqli_fetch_array($result);
 if($row['username'] == $uname && $row['password'] == $password)
 {
	 if($row['password'] == $password && $row['id_number'] == 3001)
	 {header('location: staff3001.php');}
	 elseif($row['password'] == $password && $row['id_number'] == 3002)
	 {header('location: staff3002.php');}
     else{
	 echo "you input correct value".$row['username'].$row['password'];
	 exit();}
 }
 }
 else{
	 echo "you input correct value".$row['username'].$row['password'];
	 exit();
 }
?>