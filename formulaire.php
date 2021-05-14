
<!DOCTYPE html>
<html>

    <head>
        <title>Mon Carnet d'adresse.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="index1.css">
    </head>

<?php
    require('traitement.php');
  ?>

    <body>
        
         <a href="#"><img src="images3.JPG" id="icon" alt="logo" /></a>

         <h1>Bienvenue dans Mon Carnet d'Adresse!!!</h1>
        <div class='bloc'>
       
            <form method="POST" action="formulaire.php">
          <div>                            
                          <input type="text"  name="nom" placeholder="Entrez un Nom"><br/> <br/> 
                          <input type="text" name="prenom" placeholder="Entrez un Prénom"><br/> <br/> 
                          <input type="tel" name="telephone" placeholder="Entrez un Numéro"><br/> <br/> 
                          <input type="email" name="adresse" placeholder="Entrez une adresse">
                      </div><br/>
                      <div class="bloc_boutons">
                          <button type="submit" name="valider">  Ajouter</button>
                          
                      <a class="" href="listes.php">Mes contacts</a>
                      </div>  
        </form>
        </div>
         
    </body>
    <!-- wamp easyphp <button type="reset" name="supprimer">Supprimer</button> -->
</html>
