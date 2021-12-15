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

 $sql= "INSERT INTO teacher ( id_number, image, username,id, birth_date, email, address, gender, phone, password) VALUES ( '$id_number', '$image', '$username', '$id', '$birth_date', '$email', '$address', '$gender', '$phone', '$password')";
 $result=$conn->query($sql) ;
 if($result){
	 echo "form submitted";
 }
 else{
	 echo "form not submitted";
 }
 header("refresh:2 url=teacherpage.php");
?>