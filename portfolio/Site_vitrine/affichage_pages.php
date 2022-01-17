<?php 
// permet d'afficher les pages du minichat
//connection à la BDD
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
}
//gestion de l'erreur mysql
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// récupération du get page
// si $_GET['page'] existe alors j'affiche les result de tant à tant -10
if (isset($_GET['page']))
{
    //transtypage lutte contre la faille xss
    $page=htmlspecialchars($_GET['page']);
    
    $page_sup=$page*10;
    $page_inf=$page_sup-10;
           // On récupère les dix  messages de la page 
    $req = $bdd->prepare('SELECT * FROM minichat ORDER BY ID LIMIT :debut, :nombre');
    $req->bindParam(':debut', $page_inf, PDO::PARAM_INT);
    $req->bindParam(':nombre', $page_sup, PDO::PARAM_INT);
    $req->execute();


    while ($donnees = $req ->fetch()) {
         echo '<p><strong>'.htmlspecialchars($donnees['pseudo']).'<strong>'.' : '.
     htmlspecialchars($donnees['message']).'</p>';
    
     }
     $req->closeCursor(); // Termine le traitement de la requête
}
else
{
    // On récupère les dix derniers messages de la de la table minichat
  $reponse = $bdd->query('SELECT * FROM minichat ORDER BY ID DESC LIMIT 0, 10');

  // on affiche le resulat de la requete pour les 10 derniers messages en partant du plus récent
  while ($donnees = $reponse ->fetch()) {
      echo '<p><strong>'.htmlspecialchars($donnees['pseudo']).'<strong>'.' : '.
  htmlspecialchars($donnees['message']).'</p>';
    }
  $reponse->closeCursor(); // Termine le traitement de la requête
}
?>
