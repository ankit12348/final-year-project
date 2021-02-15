<?php

$conn = mysqli_connect('localhost','ecomptod_ecompto','Ankit12348');
mysqli_select_db($conn,'ecomptod_project');
$query = "delete from about where id = '$_GET[ID]'";
if(mysqli_query($conn,$query))
	header("refresh:1; url=comments");
else
	echo "<script>alert('Error');</script>";

?>