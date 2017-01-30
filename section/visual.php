<section id="couleurs" class="koliko col-xs-12 col-md-10 col-sm-10">
  <!-- Titre de la section -->
  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <h3 class="text-center">Personnaliser le visuel de mon site web</h3>
    </div>
  </div>

  <!-- Visuel du site web en miniature -->
  <div id="miniature" class="row">
    <section class="col-xs-12 col-md-9 col-sm-9">

        <!-- Navigation -->
        <nav class="navbar" role="navigation">
            <div class="container-fluid">
                <!-- Left -->
                <div class="navbar-header">
                    <a class="navbar-brand">Mon Répertoire</a>
                </div>
                <!-- Right -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                      <li><a>Accueil</a></li>
                      <li><a>Répertoire</a></li>
                      <li><a>A propos</a></li>
                      <li><a>Contact</a></li>
                      <li><a>Connexion</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>

        <!-- Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="">Lorem Ipsum</h1>
                <ol class="breadcrumb">
                    <li><a id="li">Home</a></li>
                    <li class="active">Lorem Ipsum</li>
                </ol>
            </div>
        </div>
        <!-- Wrapper for slides -->
        <div class="row">
          <div class="col-md-4 col-md-offset-1">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4><i class="fa fa-fw fa-check"></i> Lorem ipsum7</h4>
              </div>
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                <a class="btn ">Learn More</a>
              </div>
            </div>
          </div>

          <!-- image portfolio -->
          <div class="col-md-4 col-md-offset-2 img-portfolio">
              <img class="photoMiniature img-responsive img-hover" src="../img/portfolio1.jpg" alt="">
              <h3>Username</h3>
              <p>22 ans <span>(19/12/1994)</span></p>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio.</p>
              <h4>Games</h4>
              <table class="table table-striped  table-hover">
                <thead>
                  <tr>
                    <th>Game</th>
                    <th>Username</th>
                  </tr>
                </thead>
                  <tr>
                    <td>Lorem</td>
                    <td>Ipsum</td>
                  </tr>
              </table>
          </div>
        </div>
    </section>

    <!-- Paramètre de personnalisation -->
    <section class="parametres col-xs-12 col-md-3 col-sm-3">
      <form class="" action="../sheet_php/panel.php" method="post">
        <div class="row">
          <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
              <label for="color" class="labelColor">La barre de navigation</label>
              <input class="form-control inputColor" name="navColor" type='color' value="<?php echo $data['navColor']; ?>">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
              <label for="color">Les titres</label>
              <input class="form-control inputColor" name="titleColor" type='color' value="<?php echo $data['titleColor']; ?>">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
              <label for="color">Les liens</label>
              <input class="form-control inputColor" name="lienColor" type='color' value="<?php echo $data['lienColor']; ?>">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
              <label for="color">Les boutons</label>
              <input class="form-control inputColor" name="btnColor" type='color' value="<?php echo $data['btnColor']; ?>">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="form-group">
              <select id="police" name="police" >
                <option <?php if($data['police'] == 'Roboto'){ echo 'selected'; } ?> class="police" value="Roboto">Roboto</option>
                <option <?php if($data['police'] == 'Slabo'){ echo 'selected'; } ?> class="police" value="Slabo">Slabo</option>
                <option <?php if($data['police'] == 'Fantasy'){ echo 'selected'; } ?> class="police" value="Fantasy">Fantasy</option>
                <option <?php if($data['police'] == 'Inherit'){ echo 'selected'; } ?> class="police" value="Inherit">Inherit</option>
                <option <?php if($data['police'] == 'Monospace'){ echo 'selected'; } ?> class="police" value="Monospace">Monospace</option>
              </select>
            </div>
          </div>
        </div>

        <input class="btn submit center-block" type="submit" name="boutton" value="enregistrer">
      </form>
    </section>
  </div>
</section>
