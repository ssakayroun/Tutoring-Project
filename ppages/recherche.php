<?php
session_start();

echo "<h3>Resultat de votre recherche</h3>";

require('connex.php');

mysql_connect($host,$user,$pwd);
mysql_select_db($base);

$rech= $_POST['rechercher'];
if(empty($rech)){
echo "<font color=\"red\">Désolé, vous n'avez pas entré d'information à rechercher</font>";

}
else{

$req= "select * from tutoriels where descriptiontuto like'%$rech%' or nomtuto like '%$rech%' ";
$req2= "select * from forum where Message like'%$rech%' or pseudo like '%$rech%' ";
$exe=mysql_query($req);

$trouve=4;
$cpt=0;
echo "<div id=\"tabrecherche\"><table border='1' width=\"710px\">";
while($l=mysql_fetch_array($exe))
{
$cpt++;
echo "<tr>
<td>".$cpt."</td>
<td><a href=\"".$l['lientuto']."\">".$l['nomtuto']."</a></td>
<td>".$l['descriptiontuto']."</td>
</tr>";

}
$exe=mysql_query($req2);
while($d=mysql_fetch_array($exe))
{
$cpt++;
echo "<tr><td>".$cpt."</td><td><a href=\"index.php?page=4\"> ".$d['pseudo']."</a></td>
<td>".$d['Message']."</td>
</tr>";

}
echo "</table></div>";

}

?>