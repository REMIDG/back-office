<?php

  session_start();

  include_once('../include/cnx.php');
  $res = mysqli_query($cnx, "SELECT * FROM parameters ORDER BY id DESC LIMIT 1");
  $data = mysqli_fetch_assoc($res);

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

  <div class="container-fluid"><!-- START CONTAINER-FLUID -->

    <!-- Start heart page Admin -->
    <div class="row">
      <aside class="onglet col-xs-12 col-md-2 col-sm-2">
        <ul class="nav nav-pills nav-stacked">
          <li role="presentation" class="" ><a href="#" onclick="koliko('home');">Accueil</a></li>
          <li role="presentation" class="" ><a href="#" onclick="koliko('couleurs');">Visuel de mon site</a></li>
          <li role="presentation" class="" ><a href="#" onclick="koliko('message');">Messages reçu</a></li>
          <li role="presentation" class="" ><a href="#" onclick="koliko('profils');">Validation des profils</a></li>
          <li role="presentation" class="" ><a href="#" onclick="koliko('');">New posibility for you</a></li>
          <li role="presentation" class="" ><a href="#" onclick="koliko('');">New posibility for you</a></li>
          <li role="presentation" class="" ><a href="#" onclick="koliko('');">New posibility for you</a></li>
          <li role="presentation" class="" ><a href="#" onclick="koliko('');">New posibility for you</a></li>
          <li role="presentation" class="" ><a href="#" onclick="koliko('');">New posibility for you</a></li>
          <li role="presentation" class="" ><a href="#" onclick="koliko('');">New posibility for you</a></li>
        </ul>
      </aside>

      <section id="home" class="koliko col-xs-12 col-md-10 col-sm-10">
          <h3 class="text-center">Bienvenue dans votre back-office <?php echo isset($_SESSION['first_name'])? $_SESSION['first_name'] : ""; ?></h3>
      </section>

      <!-- SECTION PERSONNALISATION DU VISUEL DU SITE WEB -->
      <?php include('../section/visual.php'); ?>

      <!-- SECTION RECEPTION DES MESSAGES -->
      <?php include('../section/message.php'); ?>

      <!-- SECTION VALIDATION DES PROFILS UTILISATEURS -->
      <?php include('../section/utilisateur.php'); ?>

    </div><!-- End heart page Admin -->

    <hr>

    <?php include('../include/footer.php'); ?>

  </div><!-- END CONTAINER-FLUID -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>

    <script src='../spectrum/spectrum.js'></script>

    <script>
        $('.carousel').carousel({
            interval: 5000
        })
    </script>

</body>

</html>
