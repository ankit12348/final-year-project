<?php
include("class/users.php");
$admin = new users;
extract($_POST);

if($admin->admin($e , $p))
{
	$admin->url("admin_panel");
}
else
{
	$admin->url("admin_user?admin=failed");	
}

?>