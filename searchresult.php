<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
	<style>
 table{
	margin:auto;
    padding:15px;
	text-align:center;
	color:#3377ff;
	border: 1px solid blue;
	border-collapse: collapse;
}
 tr{
	padding:15px;
    text-align:left;
	border: 1px solid blue;
	border-collapse: collapse;
	text-align:center;
}
td{
	padding:15px;
	font-size:15px;
	color:blue;
	border: 1px solid blue;
	border-collapse: collapse;
	text-align:center;
}
th{
	padding:15px;
	font-size:35px;
	color:blue;
	border: 1px solid blue;
	border-collapse: collapse;
	text-align:center;
}
	</style>
</head>

<body>
    <form action="" method="post">
        <input type="number" placeholder="Search Id" name="search">
        <button type="submit" name="submit">Search</button>
    </form>
 <h1>Result Search</h1>
		<hr>		
<table>
<thead>
<tr>
<th>Id</th>
<th>Class Name</th>
<th>Exam Name</th>
<th>Bangla</th>
</tr>
</thead>
<?php
if (isset($_POST['submit'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "aamsc");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM student_register WHERE id_number LIKE '%$searchValue%'";

        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) { ?>
		  <tr>
		  <td><?php echo $row['id_number']; ?></td>
		  <td><?php echo $row['class_name']; ?></td>
		  <td><?php echo $row['exam_name']; ?></td>
		  <td><?php echo $row['bangla']; ?></td>
		  </tr>           
        <?php
		}    
    }   
}
?>
</table>
</body>

</html>