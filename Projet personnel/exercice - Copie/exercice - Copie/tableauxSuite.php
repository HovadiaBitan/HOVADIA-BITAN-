<?php $tab = array();
$tab[0] = 15;
$tab[1] = 16;
$tab[2] = 13;


foreach($tab as $contenu){
	
	echo $contenu."<br />";
}

foreach($tab as $case=>$contenu){
	
	echo "case ".$case." : ".$contenu."<br />";
}



?>