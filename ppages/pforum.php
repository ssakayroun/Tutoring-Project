<?php
session_start();
$s=$_SESSION['pseudo'];
include('ppages/connex.php');
extract($_POST);

$req="INSERT INTO forum VALUES('','$s','$message',NOW())";

$exe = mysql_query($req);

header('location:../index.php?page=4');
?>