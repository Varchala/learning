<?php
$db = mysqli_connect('localhost', 'root','varchala','test3');
	if($db)
	{
		echo "success!connected to mysql database\n";
	}
	else
	{
		die("error");
	}
?>

<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>

<?php
//Step2
$query = "SELECT * FROM employee";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row['No'] . ' ' . $row['Name'] . ': ' . $row['dept'] . ' ' . $row['univ'] .'<br />';
}
?>

</body>
</html>