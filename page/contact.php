<?php

  error_reporting(E_ALL);
  ini_set('display_errors', true);

  session_start();

  // echo "connexion = ".isset($_SESSION['username']);

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Challenge PHP de Rémi</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/main.php" rel="stylesheet" type="text/css" medial="all">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Spectrum custom colors with one colorpicker -->
    <link href='../spectrum/spectrum.css' rel='stylesheet'>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php include('../include/navbar.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact</h1>
                <ol class="breadcrumb">
                    <li><a href="../_index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Form Column -->
            <div class="col-md-8">
                <!-- Contact form -->
                <form enctype="multipart/form-data" name="sentMessage" id="contactForm" action="../sheet_php/msg.php" method="post" novalidate>
                  <!-- Part form left -->
                  <div class="row">
                    <div class="col-xs-12 col-md-6 col-sm-6">
                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Pseudo :</label>
                              <input type="text" name="pseudo" class="form-control" id="pseudo" placeholder="Pseudo*" required data-validation-required-message="Veuillez entrer votre pseudo.">
                              <p class="help-block"></p>
                          </div>
                      </div>

                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Prénom :</label>
                              <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Prénom*" required data-validation-required-message="Veuillez entrer votre prénom.">
                          </div>
                      </div>

                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Nom :</label>
                              <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Nom*" required data-validation-required-message="Veuillez entrer votre nom.">
                          </div>
                      </div>

                      <div class="control-group form-group">
                          <div class="controls">
                              <label>E-mail :</label>
                              <input type="email" name="email" class="form-control" id="email" placeholder="Email*" required data-validation-required-message="Veuillez entrer votre adresse e-mail.">
                          </div>
                      </div>

                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Jeux :</label>
                              <input type="text" name="game" class="form-control" id="game" placeholder="Celui où vous avez le plus d'heure à votre actif*" required data-validation-required-message="Veuillez entrer le nom du jeu auquel vous jouez.">
                          </div>
                      </div>
                    </div>

                  <!-- Part form right -->
                    <div class="col-xs-12 col-md-6 col-sm-6">
                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Date de naissance :</label>
                              <input type="date" name="birthday_date" class="form-control" id="birthday_date" placeholder="xx/xx/xxxx">
                          </div>
                      </div>

                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Message :</label>
                              <textarea rows="4" cols="100" name="message" class="form-control" id="message" placeholder="Posez votre question ici ou laissez moi simplement votre message*" required data-validation-required-message="Veuillez écrire votre message avant envoi." maxlength="999" style="resize:none"></textarea>
                          </div>
                      </div>

                      <div class="control-group form-group">
                          <div class="controls">
                              <label>Image de profil :</label>
                              <input type="file" name="img" class="form-control" id="img">
                          </div>
                      </div>

                        <button type="submit" class="btn btn-primary center-block">Send Message</button><br>

                        <?php
                        $_SESSION['envoi'] = "";
                        
                        if ($_SESSION['envoi'] = "yes") {
                          echo "<div class='text-center'><p>Votre compte a été créé avec succès</p></div>";
                        }elseif($_SESSION['envoi'] = "no"){
                          echo "<div><p>Erreur lors de l'envoie des données veuillez recommencer dans 5 minutes</p></div>";
                        } ?>

                    </div>
                  </div>

                </form>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <?php include('../include/footer.php'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>

</body>

</html>
