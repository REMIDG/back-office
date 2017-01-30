<?php

    error_reporting(E_ALL);
    ini_set('display_errors', true);

    session_start();

    include_once('../include/cnx.php');
    //var_dump($cnx);



// Récupère les _POST :
    $pseudo = isset($_POST['pseudo'])? $_POST['pseudo'] : "error";
    $first_name = isset($_POST['first_name'])? $_POST['first_name'] : "error";
    $last_name = isset($_POST['last_name'])? $_POST['last_name'] : "error";
    $email = isset($_POST['email'])? $_POST['email'] : "error";
    $game = isset($_POST['game'])? $_POST['game'] : "error";
    $birthday_date = isset($_POST['birthday_date'])? $_POST['birthday_date'] : "error";

    $msg = isset($_POST['message'])? $_POST['message'] : "error";
    // echo "msg brut = ".$msg."<br>";
//permet de contrer les ' " /
    $message = addslashes($msg);
    //echo "msg encodé = ".$message."<br>";

    $img = isset($_FILES['img']['name'])? $_FILES['img']['name'] : "error";
    // echo "name = ".$img."<br>";

//Sauvegarde des données profils, message et nom de l'image :
    $res = mysqli_query($cnx, "INSERT INTO profil (pseudo, first_name, last_name, email, game, birthday_date, image, message) VALUES ('$pseudo', '$first_name', '$last_name', '$email', '$game', '$birthday_date', '$img', '$message') ");
    // echo "Insert = ".(int)$res."<br>";

//Récupérer les données profils pour afficher dans le back-office
    $res4 = mysqli_query($cnx, "SELECT * FROM profil ORDER BY id DESC LIMIT 1");
    $data = mysqli_fetch_assoc($res4);
    // var_dump($data);
    // echo "<br>";

//Sauvegarde des images :
    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
  //1. strrchr renvoie l'extension avec le point (« . »).
  //2. substr(chaine,1) ignore le premier caractère de chaine 1.
  //3. strtolower met l'extension en minuscules.
    $extension_upload = strtolower(  substr(  strrchr($_FILES['img']['name'], '.')  ,1)  );

    if (in_array($extension_upload,$extensions_valides)) {
      $res3 = move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/uploadedFiles/'.$data['id'].$_FILES['img']['name'] );
    }
    // echo '<pre>';
    // print_r($res);
    // echo '<pre>';

    //$_SESSION['envoi'] = "no";
    $regName = '#^[^0-9][\w_-]{2,13}$#';
    $regEmail = '#^[\w-]{2,21}@[\w-]{2,21}\.[a-zA-Z]{2,6}$#';
    $regDate = '#^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$#';
    $regMsg = '#/^[\w\n -]{6,999}$/#';

    if (preg_match($regName, $pseudo) &&
        preg_match($regName, $first_name) &&
        preg_match($regName, $last_name) &&
        preg_match($regEmail, $email) &&
        preg_match($regName, $game) &&
        preg_match($regDate, $birthday_date) &&
        preg_match($regMsg, $message)
    ) {
      //$_SESSION['envoi'] = "yes";
    }else {
      //$_SESSION['envoi'] = "no";
    }


    header('location:../page/contact.php');


?>
