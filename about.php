<?php
include("class/users.php");
$about = new users;
extract($_POST);
$comment = htmlentities($c);
$query = "insert into about values('','$n','$comment')";

if($about->about($query))
{
	$about->url("about_us?save=success");

}

?>