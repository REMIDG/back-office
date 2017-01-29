<?php

  include_once('../include/cnx.php');

  $res1 = mysqli_query($cnx, "SELECT * FROM profil ORDER BY id DESC LIMIT 1");
  $data1 = mysqli_fetch_assoc($res1);

  $res2 = mysqli_query($cnx, "SELECT * FROM message ORDER BY id DESC LIMIT 1");
  $data2 = mysqli_fetch_assoc($res2);

?>

<section id="message" class="koliko col-xs-12 col-md-10 col-sm-10">
  <!-- Titre de la section -->
  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <h3 class="text-center">Vos derniers messages reçu</h3>
    </div>
  </div>

  <div class="row">
    <!-- messages -->
    <div class="col-xs-12 col-md-7 col-sm-7">
      <?php

        echo '<table>';

        echo '<tr>';
        echo '<th>Mes messages reçu</th>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>';
        echo '</tr>';

        echo '</table>';

      ?>
    </div>
    <!-- profils -->
    <div class="col-xs-12 col-md-5 col-sm-5">
      <?php

        echo '<table>';

        echo '<tr>';
        echo '<th>Profils</th>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Rémi</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Vincent</td>';
        echo '</tr>';

        echo '</table>';

      ?>
    </div>
  </div>
</section>
