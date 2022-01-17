 <!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>deconnexion</title>
</head>
<body>
    <!------------------------ le bandeau superieur ----------------------------->
        <!-------------------------------------------------------------->
        <?php 
       include("header.php") ;
       ?>
</body>
</html><!-- afficher la deconnexion -->
<?php
echo 'Vous venez de vous deconnecter';
?>
<!-- afficher un lien pour retour à l'accueil -->
<?php
echo "retour à la page d'accueil";
?>
<!-- mettre un timer qui permet de revenir automatiquement à la page d'accueil-->
<?php
echo 'vous allez etre redirigé directement dans X secondes';
?>