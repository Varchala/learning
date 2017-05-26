<?php
  /*$host = "127.0.0.1";
    $user = "varchala";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "c9";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    
    $con = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
*/
 $con = mysqli_connect('localhost', 'root','varchala','students');
 echo $_request[];
	if($con)
	{
		echo "success!connected to mysql database\n";
	}
	else
	{
		die("error");
	}
	
	//if(isset($_POST['first_name']))
$fn = isset($_POST['first_name']);
//if(isset($_POST['last_name']))
$ln = isset($_POST['last_name']);
	//if(isset($_POST['email']))
$em = isset($_POST['email']);
 // if(isset($_POST['password']))
$pswd = isset($_POST['password']);
//	if(isset($_POST['interest']))
$in = isset($_POST['interest']);
 // if(isset($_POST['questions']))
$q = isset($_POST['questions']);
	//if(isset($_POST['idea']))
$id = isset($_POST['idea']);
$sql = "INSERT INTO register VALUES('$fn','$ln','$em','$pswd','$in','$q','$id')";
if(mysqli_query($con,$sql))
{
echo "row inserted succesfully";
}
else
{echo "failed";}
mysqli_close($con);
?>