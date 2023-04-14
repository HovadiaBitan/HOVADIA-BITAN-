vous aves choisi : 

<?php



echo $_GET["dept"]; 

?>

<br />
pour le pourcentage :

<?php
switch($_GET["dept"]) {

    case "1 ans":echo "vous avez 15 %";break;
    case "2 ans":echo "vous avez 30%" ;break;
    case "3 ans ":echo "vous avez 50%";break;
    default:echo"autre coix"; break;

}

?>


