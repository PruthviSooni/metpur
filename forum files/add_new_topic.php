<?php

$host="localhost";
$username="root";
$password=""; 
$db_name="myforum"; 
$tbl_name="fquestions"; 

	mysqli_connect("$host", "$username","")or die("cannot connect"); 
	mysqli_select_db("$db_name")or die("cannot select DB");

	$topic=$_POST['topic'];
	$detail=$_POST['detail'];	
	$name=$_POST['name'];
	$email=$_POST['email'];

	$datetime=date("d/m/y h:i:s"); 

	$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
	$result=mysqli_query($sql);

	if($result)
	{
		echo "Successful<BR>";
		echo "<a href=main_forum.php>View your topic</a>";
	}
	else 
	{
		echo "ERROR";
	}
mysqli_close();
?>