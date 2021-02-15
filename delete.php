<?php
include("class/users.php");
$delete = new users;
$cat = $_POST['c1'];
if($delete->delete($cat))
{
	$delete->url("admin_panel?msg1=run");
}

?>