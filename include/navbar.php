<!-- Navigation -->
<nav class="navbar navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Left -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "_index.php") ? "" : "." ; ?>./_index.php">Mon Répertoire</a>
        </div>
        <!-- Right -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
              <li>
                  <a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "_index.php") ? "" : "." ; ?>./_index.php">Accueil</a>
              </li>
              <li>
                  <a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "_index.php") ? "page/" : "./" ; ?>repertory.php">Répertoire</a>
              </li>
              <li>
                  <a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "_index.php") ? "page/" : "./" ; ?>about.php">A propos</a>
              </li>
              <li>
                  <a href="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "_index.php") ? "page/" : "./" ; ?>contact.php">Contact</a>
              </li>


              <?php

                if (isset($_SESSION['username'])) {
                  echo '<li>
                          <a href="';
                  echo (basename($_SERVER["SCRIPT_FILENAME"]) == "_index.php") ? "page/" : "./";
                  echo    'admin.php">Admin</a>
                        </li>';

                  echo '<li>
                          <a href="';
                  echo (basename($_SERVER["SCRIPT_FILENAME"]) == "_index.php") ? "" : ".";
                  echo    './sheet_php/dcnx.php">Déconnexion</a>
                        </li>';
                }else {
                  echo '<li>
                          <a href="" class="" data-toggle="modal" data-target="#cnxAdmin">Connexion</a>
                        </li>';
                }

              ?>

          </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<div class="container-fluid"><!-- Start container-fluid -->

<!-- Modal de connexion à la page Admin -->
  <div class="modal fade" id="cnxAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="exampleModalLabel">Connectez-vous en tant qu'administrateur</h5>
        </div>
        <div class="modal-body">
          <form enctype="multipart/form-data" action="<?php echo (basename($_SERVER["SCRIPT_FILENAME"]) == "_index.php") ? "" : "." ; ?>./sheet_php/cnxAdmin.php" method="post">
            <div class="form-group">
              <label for="recipient-name" class="form-control-label">Identifiant :</label>
              <input type="text" name="username" class="form-control" id="recipient-name" placeholder="Pseudo ou email" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="message-text" class="form-control-label">Mot de passe :</label>
              <input type="password" name="password" class="form-control" id="recipient-password" placeholder="Mot de passe" autocomplete="off">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Me connecter</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div><!-- End container-fluid -->
