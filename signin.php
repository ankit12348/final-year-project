<?php
include("class/users.php");
$signin = new users;
extract($_POST);

if($signin->signin($e,$p))
{
	if(!empty($rem))
	{
		setcookie("email", $e, time() + (86400 * 7), "/");
		setcookie("password", $p, time() + (86400 * 7), "/");	
	}
	else
	{
		if(isset($_COOKIE["email"]))
		{
			setcookie("email","");
		}
		if(isset($_COOKIE["password"]))
		{
			setcookie("password","");
		}
	}
	
	$signin->url("home");
}
else
{
	$signin->url("index?signin=failed");
}

?>