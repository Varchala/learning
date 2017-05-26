<?php
$con=mysqli_connect('localhost','root','varchala','test3');
if($con)
echo "connection successful";
else
die("error");
$id=$_POST['ei'];
$query = "SELECT * FROM employ where empid=$id";
mysqli_query($con, $query) or die('Error querying database.');

$result = mysqli_query($con, $query);
//$row = mysqli_fetch_array($result);
echo "<html> <body> <table>";
echo "<th>empid</th>";
echo "<th>ename</th>";
echo "<th>sal</th>";
echo "<th>mobile</th>";
echo "<th>joindt</th>";
echo "<th>exp</th>";
$pdt=2017-08-08;
while ($row = mysqli_fetch_array($result)) {
$v=$row['joindt'];
$exp=$pdt-$v;
 echo "<tr>";
 echo "<td>";
 echo $row['empid'];
echo "</td>";
 echo "<td>";
 echo $row['ename'];
echo "</td>";
 echo "<td>";
 echo $row['sal'];
echo "</td>";
 echo "<td>";
 echo $row['mobile'];
echo "</td>";
 echo "<td>";
 echo $row['joindt'];
echo "</td>";
echo "<td>";
 echo $exp;
echo "</td>";
echo "</tr>";
 }
 echo "</table> </body> </html>";
?>