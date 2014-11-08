
<?php
session_start();


include ("connex.php");// If database connection is correct then the file is included and the connection made
extract($_POST);	
echo $_POST['login'];


?>