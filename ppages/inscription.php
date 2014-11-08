<?php
session_start();
$_SESSION['pseudo']=$_POST['login'];

require('connex.php');

mysql_connect( $host,$user,$pwd);
mysql_select_db($base);
extract($_POST);

$req="INSERT INTO inscription VALUES('','$lastName','$firstName','$age','$sex','$login','$pwd1','$pwd2','$country','$news')";

$exe=mysql_query($req);
if($exe){
 
header('location:../index.php');

}

?>