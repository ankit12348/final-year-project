<?php
include("class/users.php");
extract($_POST);
$add = new users;
$question = htmlentities($q);
$option1 = htmlentities($o1);
$option2 = htmlentities($o2);
$option3 = htmlentities($o3);
$option4 = htmlentities($o4);
$array = [$option1, $option2, $option3, $option4];
$answer = array_search($a, $array);
$right = htmlentities($r);
$query = "insert into questions values ('','$question','$option1','$option2','$option3','$option4','$answer','$right','$c2')";
if($add->add($query))
{
	setcookie("cat", $c2, time() + (60) , "/");
	$add->url("admin_panel?msg=run");
}

?>