<?php

  ini_set('display_errors', true);
  error_reporting(E_ALL);

  session_start();

  include_once('../include/cnx.php');

  $username = isset($_POST['username'])? $_POST['username'] : "";
  $pwd = isset($_POST['password'])? $_POST['password'] : "";

  // echo $username."<br>"; echo $pwd."<br>";

  $res = mysqli_query($cnx, "SELECT * FROM admin WHERE username='$username' and password='$pwd' ");

  $data = mysqli_fetch_assoc($res);
  // var_dump($data); echo "<br><br>";


  if ($data != NULL) {
    foreach ($data as $key => $value) {
      $_SESSION[$key] = $data[$key];
      // var_dump($_SESSION[$key]);
    }
    header('location:../page/admin.php');
    // echo "Cnx réussit<br><br>";
  }else{
    header('location:../_index.php');
    // echo "Cnx failed";
  }

?>
