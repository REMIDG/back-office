<?php

  include_once('../include/cnx.php');

  $res = mysqli_query($cnx, "SELECT date_msg, message FROM profil ORDER BY id DESC");

  $res2 = mysqli_query($cnx, "SELECT date_msg, message FROM profil ORDER BY id DESC");

?>

<section id="message" class="koliko col-xs-12 col-md-10 col-sm-10">
  <!-- Titre de la section MESSAGES -->
  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <h3 class="text-center">Vos derniers messages reçu</h3>
    </div>
  </div>

  <div class="row">
    <!-- DOSSIERS MESSAGES -->
    <div class="col-xs-12 col-md-2 col-sm-2" style="background-color: gray; font-size: 12px; height: 81vh; overflow: scroll;">
      <ul class="nav nav-pills nav-stacked">
        <li role="presentation"><a href="#">Boîte de réception</a></li>
        <li role="presentation"><a href="#">Game of Throne</a></li>
        <li role="presentation"><a href="#">Resident Evil</a></li>
        <li role="presentation"><a href="#">Ligue of Legend</a></li>
        <li role="presentation"><a href="#">Assasin's Creed</a></li>
        <li role="presentation"><a href="#">Game #1</a></li>
        <li role="presentation"><a href="#">Game #2</a></li>
        <li role="presentation"><a href="#">Game #3</a></li>
        <li role="presentation"><a href="#">Game #4</a></li>
        <li role="presentation"><a href="#">Game #5</a></li>
        <li role="presentation"><a href="#">Game #6</a></li>
        <li role="presentation"><a href="#">Game #7</a></li>
        <li role="presentation"><a href="#">Game #8</a></li>
        <li role="presentation"><a href="#">Game #9</a></li>
        <li role="presentation"><a href="#">Game #10</a></li>
        <li role="presentation"><a href="#">Game #11</a></li>
        <li role="presentation"><a href="#">Game #12</a></li>
      </ul>
    </div>
    <!-- MESSAGES MINITATURES -->
    <div class="col-xs-12 col-md-3 col-sm-3" style="height: 81vh; overflow: scroll;">

      <div class="row list-group">
        <div class="col-xs-12 col-md-2 col-sm-2">
          <button class="btn btn-default" type="button" name="button">X</button>
        </div>
        <div class="col-xs-12 col-md-10 col-sm-10">
          <a href="#" class="list-group-item">
            <h5 class="list-group-item-heading">Jeannette alias Slopoke</h5>
            <p class="list-group-item-text">Pokemon Go</p>
            <p class="list-group-item-text">dimanche 16/01/2017</p>
          </a>
        </div>
      </div>

      <div class="row list-group">
        <div class="col-xs-12 col-md-2 col-sm-2">
          <button class="btn btn-default" type="button" name="button">X</button>
        </div>
        <div class="col-xs-12 col-md-10 col-sm-10">
          <a href="#" class="list-group-item">
            <h5 class="list-group-item-heading">Nolwenn alias Lala</h5>
            <p class="list-group-item-text">Spice Girls</p>
            <p class="list-group-item-text">dimanche 09/01/2017</p>
          </a>
        </div>
      </div>

      <div class="row list-group">
        <div class="col-xs-12 col-md-2 col-sm-2">
          <button class="btn btn-default" type="button" name="button">X</button>
        </div>
        <div class="col-xs-12 col-md-10 col-sm-10">
          <a href="#" class="list-group-item">
            <h5 class="list-group-item-heading">Mike alias Le Gentil</h5>
            <p class="list-group-item-text">Taken</p>
            <p class="list-group-item-text">samedi 08/01/2017</p>
          </a>
        </div>
      </div>

      <div class="row list-group">
        <div class="col-xs-12 col-md-2 col-sm-2">
          <button class="btn btn-default" type="button" name="button">X</button>
        </div>
        <div class="col-xs-12 col-md-10 col-sm-10">
          <a href="#" class="list-group-item">
            <h5 class="list-group-item-heading">Jeannette alias Slopoke</h5>
            <p class="list-group-item-text">Pokemon Go</p>
            <p class="list-group-item-text">dimanche 16/01/2017</p>
          </a>
        </div>
      </div>

      <div class="row list-group">
        <div class="col-xs-12 col-md-2 col-sm-2">
          <button class="btn btn-default" type="button" name="button">X</button>
        </div>
        <div class="col-xs-12 col-md-10 col-sm-10">
          <a href="#" class="list-group-item">
            <h5 class="list-group-item-heading">Nolwenn alias Lala</h5>
            <p class="list-group-item-text">Spice Girls</p>
            <p class="list-group-item-text">dimanche 09/01/2017</p>
          </a>
        </div>
      </div>

      <div class="row list-group">
        <div class="col-xs-12 col-md-2 col-sm-2">
          <button class="btn btn-default" type="button" name="button">X</button>
        </div>
        <div class="col-xs-12 col-md-10 col-sm-10">
          <a href="#" class="list-group-item">
            <h5 class="list-group-item-heading">Mike alias Le Gentil</h5>
            <p class="list-group-item-text">Taken</p>
            <p class="list-group-item-text">samedi 08/01/2017</p>
          </a>
        </div>
      </div>

      </div>

    <!-- MESSAGES ENTIERS -->
    <div class="col-xs-12 col-md-6 col-sm-6" style="color: balck;">
      <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12">
          <h3>Rémi DE GRAUW alias Menhir</h3>
          <p>degrauw.remi@outlook.com</p>
          <p>dimanche 16 janvier 2017 à 14:05</p>
        </div>
        
        <div class="col-xs-12 col-md-12 col-sm-12">
          <p>Mon message le plus beau du monde ! Bonjour le numérique =D</p>
        </div>
      </div>
    </div>
  </div>
</section>
