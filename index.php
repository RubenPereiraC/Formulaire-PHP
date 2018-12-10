<?php
  session_start();
?>

<!doctype html>

<html lang="fr">
  <head>

    <meta charset="utf-8">

    <title>Formulaire</title>
    <meta name="description" content="Formulaire">
    <meta name="ruben-pc" content="Formulaire">
    
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="scss/materialize.css"  media="screen,projection"/>

  </head>

<body>

<!-- Tous les champs sont obligatoires !
sauf le sujet (dans ce cas, valeur = "Autre") -->

  <div class="container valign-wrapper">

<!-- row qui contient tout le formulaire -->
      <div class="row">

<!-- div contenant le logo -->
      <div class="row valign-wrapper"> 
        <img src="img/logo.png" alt="Logo de Hackers Poulette" height="375px" width="450px">
      </div>


<!--debut du formulaire -->
    <form class="col s12" action="contact.php" method="POST"> 

      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Pr&eacute;nom" id="first_name" name="first_name" type="text" class="validate">
          <label for="first_name">Pr&eacute;nom</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Nom" id="LastName" name="LastName" type="text" class="validate">
          <label for="LastName">Nom</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="inputemail" type="email" name="email" class="validate">
          <label for="inputemail">Email</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="pays" type="text" class="validate">
          <label for="pays">Pays</label>
        </div>
      </div>

<!--Choix du genre-->
      <div class="row">
              <p class="col s6">
                <label>
                  <input name="group1" type="radio" checked />
                  <span>Homme</span>
                </label>
              </p>
              <p class="col s6">
                <label>
                  <input name="group1" type="radio" />
                  <span>Femme</span>
                </label>
              </p>
      </div>      

<!--Choix du sujet-->
      <div class="row">
        <label>S&eacute;lectionner votre sujet :</label>
        <select class="browser-default">
          <option value="" disabled selected>S&eacute;lectionner votre sujet :</option>
          <option value="1">Support technique</option>
          <option value="2">Garantie</option>
          <option value="3">Remboursement(s)</option>
        </select>
      </div>

<!--Textarea-->


          <div class="row">
            <div class="input-field col s12">
              <textarea name="message" id="inputmessage" class="materialize-textarea"></textarea>
              <label for="inputmessage">Entrer votre texte ici...</label>
            </div>
          </div>

    <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer</button>   

    </form> <!--Fin du formulaire de contact-->
  </div>


  </div><!-- FIN Container-->




      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>