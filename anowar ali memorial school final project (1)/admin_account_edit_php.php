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
		$id_number =$_POST['id_number'];
		$payment_date =$_POST['payment_date'];
		$reference= $_POST['reference'];
		$particulars = $_POST['particulars'];
		$payment_mode = $_POST['payment_mode'];
		$Amount_BDT = $_POST['Amount_BDT'];

 $sql= "UPDATE admin_register SET id_number='$id_number', payment_date = '$payment_date', reference ='$reference',particulars = '$particulars',payment_mode = '$payment_mode', Amount_BDT = '$Amount_BDT' WHERE SL = '$SL' ";
 $result=$conn->query($sql) ;
 if($result){
	 echo "form submitted";
 }
 else{
	 echo "form not submitted";
 }
 header("refresh:2 url= admin_account.php");
?>