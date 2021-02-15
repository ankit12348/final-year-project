<?php
include("class/users.php");
$register = new users;
extract($_POST);
$image_name = $_FILES["img"]["name"];
$temp_name = $_FILES["img"]["tmp_name"];
$folder = "image/".$image_name;
if($register->signup($e))
{
	$register->url("signup_user?signup=failed");
}
else
{
	move_uploaded_file($temp_name,$folder);
	$query = "insert into sign_up values('','$n','$e','$p','$image_name')";
	if($register->process($query))
	{
		$register->url("signup_user?signup=success");
	}
}


?>