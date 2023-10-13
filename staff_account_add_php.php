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
		$SL =$_POST['SL'];
		$id_number =$_POST['id_number'];
		$payment_date =$_POST['payment_date'];
		$reference= $_POST['reference'];
		$particulars = $_POST['particulars'];
		$payment_mode = $_POST['payment_mode'];
		$Amount_BDT = $_POST['Amount_BDT'];

 $sql=  "INSERT INTO staff_register (SL, id_number, payment_date, reference, particulars, payment_mode, Amount_BDT) VALUES ('$SL', '$id_number', '$payment_date', '$reference', '$particulars', '$payment_mode', '$Amount_BDT')";
 $result=$conn->query($sql) ;
 if($result){
	 echo "form submitted";
 }
 else{
	 echo "form not submitted";
 }
 header("refresh:5 url= staff_account.php");
?>