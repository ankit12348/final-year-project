<?php
setcookie("email", $e, time() - 3600, "/");
unset($_COOKIE['email']);
setcookie("password", $p, time() - 3600, "/");
unset($_COOKIE['password']);
session_start();
session_destroy();
header("location: index");

?>
