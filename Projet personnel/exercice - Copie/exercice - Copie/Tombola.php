BIEN VENUE



<br/>

<?php
  
    
   
    if(isset($_GET["TOMBOLA"])  ) {
    echo"<br />";
       echo "TOMBOLA:".$_GET["TOMBOLA"] ;
       
       $nom = $_GET["TOMBOLA"];
       
       echo"<br/>";
       //les information de connexion de la base
    $db_host = "localhost:3306";//a verifier 3306 pour mysql ou 3307 pour mariadb
    $db_user = "nom_user";// -> "root" 
    $db_mdp = "mot_de_passe_du_user";                                              //->"":laisser vide si le user root n'a pas de mdp
    $db_database = "nom_de_la base_de _donnees";//->"projet_01"
    
    //initialisation de l'objet PDO pour lancer la connexion 
    $dbh = new PDO('mysql:host='. $db_host.';dbname='.$db_database,$db_user,$db_mdp) ;
    
    //la requete a effectuer a la base de donnees
    
    $query="INSERT INTO contact (TOMBOLA date) VALUES ('$TOMBOLA' NOW() )";
    
    //enregidtrement de la requete
    $stmt = $dbh->prepare($query) ;
    //excution de la requete
    $stmt->execute();
    
    //recuperation resulta de la requete
    $response = $stmt->fetchAll(PDO::FETCH_CLASS);
    //effacer le contenu de lobjet
    $dbh = null;
    //affichage du resultat
    print_r($response);
    
    }  else{       
    
        echo "Oups ! rien reçu du formulaire ..." ; 
     }
    
    
    
    
/*
echo $_GET["TOMBOLA"];

require "connexion.php";
require "function.php";
 $sql = "insert into produit (numero) values (\"numero\")";
insertion($connexion, $sql);

*/
?>