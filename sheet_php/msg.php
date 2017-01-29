<?php

    error_reporting(E_ALL);
    ini_set('display_errors', true);

    include_once('../include/cnx.php');

    session_start();

// Récupère les _POST :
    $pseudo = isset($_POST['pseudo'])? $_POST['pseudo'] : "error";
    $first_name = isset($_POST['first_name'])? $_POST['first_name'] : "error";
    $last_name = isset($_POST['last_name'])? $_POST['last_name'] : "error";
    $email = isset($_POST['email'])? $_POST['email'] : "error";
    $game = isset($_POST['game'])? $_POST['game'] : "error";
    $birthday_date = isset($_POST['birthday_date'])? $_POST['birthday_date'] : "error";

    $msg = isset($_POST['message'])? $_POST['message'] : "error";
    //echo "msg brut = ".$msg."<br>";
//permet de contrer les ' " /
    $message = addslashes($msg);
    //echo "msg encodé = ".$message."<br>";

    $img = isset($_FILES['img']['name'])? $_FILES['img']['name'] : "error";
    //echo "name = ".$img."<br>";

//Sauvegarde des données profils :
    $res = mysqli_query($cnx, "INSERT INTO profil (pseudo, first_name, last_name, email, game, birthday_date, img) VALUES ('$pseudo', '$first_name', '$last_name', '$email', '$game', '$birthday_date', '$img') ");
    //echo "Insert = ".(int)$res."<br>";

//Sauvegarde des messages :
    $res2 = mysqli_query($cnx, "INSERT INTO message (message) VALUES ('$message') ");
    //echo "Insert = ".(int)$res2."<br>";

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




?>
