<?php
session_start();
$_SESSION["login"]="sucessful";
echo"session start";
if(isset($_SESSION['login']))
{
	echo"SUCESSFUL";
}
session_destroy();
?>