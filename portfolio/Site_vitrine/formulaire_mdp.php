
<?php if (isset($_POST['mot_de_passe'])) {
  
  // on transforme la variable si il y a du code HTML et transtypage
  $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);

  // on teste si le mot de passe est le bon
  if($mot_de_passe=="kangourou")
  {
  // ************ on affiche les codes ici *******************
    echo "les codes de la Nasa sont ...";
  }
//sinon on réaffiche le formulaire pour un second essai
  else
  {
  echo "le mot de passe est faux";
  ?></br>
  <p> Retenter votre chance !</p></br>
   <!-- création du formulaire de demande de mot de passe -->
  <form action="formulaire_unique.php" method="POST">
        <p><input type="password" name="mot_de_passe"/></p>
        <p><input type="submit" value="valider"/></p>
    </form>
  
  <?php
  }
 }
 else{
     ?>
    <form action="formulaire_unique.php" method="POST">
        <p><input type="password" name="mot_de_passe"/></p>
        <p><input type="submit" value="decryptage"/></p>
    </form>
 <?php }
 ?>
