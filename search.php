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

if(isset($_POST['search2'])){
	
	$search2=$_POST['pagename'];

 $sql= "select * from search where pagename='".$search2."' ";
 $result=$conn->query($sql) ;
 $row = mysqli_fetch_array($result);

	 if($row['pagename'] == $search2)
	 {header('location: photo.php');}
     else{
	 echo "you input incorrect value";
	 exit();}
}
?>