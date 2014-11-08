<?php
session_start();
include('connex.php');

$req= "Select * from inscription";
$exe=mysql_query($req);

$trouve=4;
while($l=mysql_fetch_array($exe))
{
if($_POST['login']==$l['pseudo']&&$_POST['motdepasse']==$l['motdepasse']){
$_SESSION['pseudo']=$l['pseudo'];
$trouve==1;
}

}

$_SESSION['$tr']=$trouve;

header('location:../index.php');
?>