<?php

?>
<!-- formulaire de connexion -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Page_de_connexion</title>
</head>
<body>
      <!-------------------------------------- le header --------------------------------------->
      <?php 
       include("header.php") ;
       ?>
    <form
<form action="connexion.php" method="POST">
        <p>PSEUDO<input type="text" name="pseudo"/></p>
        <p>MDP<input type="password" name="mot_de_passe"/></p>
        <p><input type="submit" value="valider"/></p>
    </form></body>
</html>
