<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Chat</title>
</head>
<body>
    <!------------------------ le bandeau superieur ----------------------------->
        <!-------------------------------------------------------------->
        <?php 
       include("header.php") ;
       ?>
    <form action="minichat_post.php" method ="post">
        <p>
            <label for="PSEUDO">Pseudo<input type="text" name="pseudo" value= 
            "<?php 
            //on test si le cookie existe et si oui on l'injecte dans la case pseudo
                if (isset($_COOKIE['pseudo']))
            {
                echo $_COOKIE['pseudo'];
            }
                ?>"
                />
            <label for="Message"><input type="text" name="message"/><br>
            
            <input type="submit" name="valider" value="valider"/>
            </p>
    </form>
       <button><a href="minichat.php">RAFRAICHIR</a></button>
<form action="minichat.php" method ="get">
    <select name="page">
<?php
include("compteur_pages.php");
for ($i=1;$i=$total_pages;$i++)
{
    echo '<option value="'.$i.'">page1</option>';
}
?>
</select>
<input type="submit" name="valider" value="valider"/>
</form>
<?php
 include("affichage_pages.php");
 
?> 
</body>
</html>