<?php
include("class/users.php");
$documents = new users;
extract($_POST);
$file_name = $_FILES["doc"]["name"];
$temp_name = $_FILES["doc"]["tmp_name"];
$folder = "document/".$file_name;
move_uploaded_file($temp_name,$folder);
$query = "insert into search values('','$c','$file_name')";
		
if($documents->upload($query))
{
	$documents->url("admin_panel?upload=success");
}

?>