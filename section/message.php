<?php

  error_reporting(E_ALL);
  ini_set('display_errors', true);

  include_once('../include/cnx.php');

  $res = mysqli_query($cnx, "SELECT * FROM profil ORDER BY id DESC");

  $res2 = mysqli_query($cnx, "SELECT * FROM profil ORDER BY id DESC");

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

      <?php

        while ($data = mysqli_fetch_assoc($res)) {
          echo '<div class="row list-group">
                  <div class="col-xs-12 col-md-2 col-sm-2">
                    <button class="btn btn-default" type="button" name="button">X</button>
                  </div>
                  <div class="col-xs-12 col-md-10 col-sm-10">
                    <a onclick="koliko("'.$data["id"].'");" href="#" class="list-group-item" >
                      <h5 class="list-group-item-heading">'.$data["first_name"].' alias '.$data["pseudo"].'</h5>
                      <p class="list-group-item-text">'.$data["game"].'</p>
                      <p class="list-group-item-text">'.$data["date_msg"].'</p>
                    </a>
                  </div>
                </div>';
        }

      ?>
    </div>
    <!-- MESSAGES ENTIERS -->
    <?php

      while($data2 = mysqli_fetch_assoc($res2)){
        echo '<div id="'.$data2["id"].'" class="koliko col-xs-12 col-md-6 col-sm-6" style="color: black;">
                <div class="row">
                  <div class="col-xs-12 col-md-12 col-sm-12">
                    <h3>'.$data2["first_name"].' '.$data2["last_name"].' alias '.$data2["pseudo"].'</h3>
                    <p>'.$data2["email"].'</p>
                    <p>'.$data2["date_msg"].'</p>
                  </div>

                  <div class="col-xs-12 col-md-12 col-sm-12">
                    <p>'.$data2["message"].'</p>
                  </div>
                </div>
              </div>';
      }

    ?>

  </div>
</section>
