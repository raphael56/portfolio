 <?php 
 ?>
 <header class="header">
 <nav>
     <ul>
         <li><a href="index.php">Accueil</a></li>
         <li><a href="inscription.php">inscription</a></li>
         <?php 
        //  si la session est ouverte mettre 
        if (1>0){ //isset de la session utilisateur
            ?><li><a href=connexion.php>connexion</a></li>
         <?php
        }
         else{ 
             ?>
              <li><a href="deconnexion.php">deconnexion</a><li class="nav__link"><a href="minichat.php">chat</a></li>
         <?php
            }
         ?>         
         <li><a href="cv.php">CV</a></li>
         <li><a href="profil.php">profil</a></li>
         

     </ul>
 </nav>
</header>