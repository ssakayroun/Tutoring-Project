<?php
session_start();
$_SESSION['pseudo']=$_POST['pseudo'];

require('connex.php');
extract($_POST);

$req="INSERT INTO contact VALUES('','$nom','$prenom','$email','$message')";

$exe = $conn->query($req);

if($exe)
{
   echo "Message envoye";
}
else
{
   echo "Message non envoye";

}
header('location:../index.php'); // we redirect the user to the index page with their loggin status updated
?>