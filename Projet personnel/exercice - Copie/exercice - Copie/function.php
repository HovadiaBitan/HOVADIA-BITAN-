<?php
// 2 arguments, un pour le lien de connexion, un pour la requete.
function insertion($pass, $requete){
//envoi en base;
$req = mysqli_query($pass, $requete);
//var_dump($req);
if ($req==true) echo "insertion effectuée";
else echo "requete mal formée";

}
?>