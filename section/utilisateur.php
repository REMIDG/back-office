<?php

  include_once('../include/cnx.php');

  $res = mysqli_query($cnx, "SELECT pseudo, first_name, last_name, email, game, birthday_date FROM profil ORDER BY id DESC");

?>
<section id="profils" class="koliko col-xs-12 col-md-10 col-sm-10">
  <!-- Titre de la section -->
  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <h3 class="text-center">Valider les profils de vos utilisateurs</h3>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <table>
        <?php

          $check = true;

          while($data = mysqli_fetch_assoc($res)){
            if ($check) {
              echo '<tr>';
              foreach ($data as $key => $value) {
                echo '<th>'.$key.'</th>';
              }
              echo '<th>Valider</th><th>Suprimer</th>';
              echo '</tr>';
            }

            $check = false;
            echo '<tr>';
            foreach ($data as $key => $value) {
              echo '<td>'.$value.'</td>';
            }
            echo '<td>
                    <form class="" action="" method="post">
                      <input type="hidden" name="id" value="">
                      <button type="submit" name="button">V</button>
                    </form>
                  </td>';
            echo '<td>
                    <form class="" action="" method="post">
                      <input type="hidden" name="id" value="">
                      <button type="submit" name="button">X</button>
                    </form>
                  </td>';
            echo '</tr>';
          }

        ?>
      </table>
    </div>
  </div>
</section>
