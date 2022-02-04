<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Inscription</title>
</head>

<body>
    <!------------------------ le bandeau superieur ----------------------------->
        <!-------------------------------------------------------------->
        <?php 
       include("header.php") ;
       ?>
    <!-- creation du formulaire pour s'inscrire -->
    <form action="connexion.php" method="post">
        <p> pseudo <input type="text" name="pseudo"> </p>
        <?php
        include("formulaire_mdp.php");
        ?>
        <p> mot de passe <input type="password" name="pass"> </p>
        <p> retapez votre mot de passe <input type="password" name="pass2"> </p>
        <p> adresse mail<input type="text" name="adresse_mail"> </p>
        <p> <input type="submit" value="s'inscrire"> </p>
    </form>
</body>

</html>