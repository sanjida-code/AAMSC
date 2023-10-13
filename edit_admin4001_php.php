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
		$image =$_POST['image'];
		$username = $_POST['username'];
		$id = $_POST['id'];
		$birth_date = $_POST['birth_date'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$phone =$_POST ['phone'];
		$password = $_POST['password'];

 $sql= "UPDATE admin_register SET id_number = '$id_number', image = '$image', username ='$username',id = '$id', birth_date = '$birth_date', email = '$email', address = '$address', gender = '$gender', phone = '$phone', password = '$password' WHERE id_number = '$id_number' ";
 $result=$conn->query($sql) ;
 if($result){
	 echo "form submitted";
 }
 else{
	 echo "form not submitted";
 }
 header("refresh:2 url=admin4001.php");
?>