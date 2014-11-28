<?php
session_start();

$_SESSION['status']='visitor';
$_SESSION['login']= NULL;
header('location:../index.php');

?>