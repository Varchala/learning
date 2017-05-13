<?php
	$con = mysqli_connect('localhost', 'root','varchala','test3');
	if($con)
	{
		echo "success!connected to mysql database\n";
	}
	else
	{
		die("error");
	}
	
	
	$No = $_POST['eno'];
	$Name = $_POST['ename'];

	$dept = $_POST['dept'];
	$univ = $_POST['univ'];

	
	$sql = "INSERT INTO employee VALUES($No,'$Name','$dept','$univ')";

	
	if(mysqli_query($con,$sql))
{echo "row inserted succesfully";}
else
{echo "failed";}

	
	mysqli_close($con);
	
?>
