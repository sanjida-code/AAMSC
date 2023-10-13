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
		$cname =$_POST['cname'];
		$image =$_POST['image'];
		$username = $_POST['username'];
		$mname = $_POST['mname'];
		$fname = $_POST['fname'];
		$birth_date = $_POST['birth_date'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$phone =$_POST ['phone'];

 $sql= "INSERT INTO admission_apply (cname, image, username,mname,fname, birth_date, email, address, gender, phone) VALUES ('$cname', '$image', '$username', '$mname', '$fname', '$birth_date', '$email', '$address', '$gender', '$phone')";
 $result=$conn->query($sql) ;
 if($result){
	 echo "form submitted";
 }
 else{
	 echo "form not submitted";
 }
 header("refresh:2 url=homepage.php");
?>