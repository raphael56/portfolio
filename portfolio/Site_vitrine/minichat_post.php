<?php
//cookie partie
    //création du cookie
setcookie('pseudo', htmlspecialchars($_POST['pseudo']),time()+30*24*3600,null,null,false,true);

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
// on teste les $POST PSEUDO
 if (isset($_POST['pseudo']) AND !$_POST['pseudo']==null AND isset($_POST['message'])AND !$_POST['message']==null) {
     
     // on transforme les variables si il y a du code HTML et transtypage

         $pseudo = htmlspecialchars($_POST['pseudo']);
         $message=htmlspecialchars($_POST['message']);

         // on insère les données dans la BDD par une requête préparée
         $req = $bdd->prepare('INSERT INTO minichat(pseudo,message) VALUES (?,?)');
         $req ->execute(array(
        $pseudo,
        $message
    ));

         //redirection vers la page minichat.php
         header('LOCATION: minichat.php');
     
    
 }
 else
 {
    header('LOCATION: minichat.php');
 }
 ?>