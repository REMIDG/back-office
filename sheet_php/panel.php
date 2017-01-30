<?php

  error_reporting(E_ALL);
  ini_SET('display_errors', true);

  include_once('../include/cnx.php');

  session_start();

  $navColor = isset($_POST['navColor'])? $_POST['navColor'] : "";
  $titleColor = isset($_POST['titleColor'])? $_POST['titleColor'] : "";
  $lienColor = isset($_POST['lienColor'])? $_POST['lienColor'] : "";
  $btnColor = isset($_POST['btnColor'])? $_POST['btnColor'] : "";
  $police = isset($_POST['police'])? $_POST['police'] : "";

  // echo "navColor = ".$navColor."<br>";
  // echo "titleColor = ".$titleColor."<br>";
  // echo "lienColor = ".$lienColor."<br>";
  // echo "btnColor = ".$btnColor."<br>";
  // echo "police = ".$police."<br>";

  $res = mysqli_query($cnx, "INSERT INTO parameters (navColor, titleColor, lienColor, btnColor, police) VALUES ('$navColor', '$titleColor', '$lienColor', '$btnColor', '$police') ");
  //echo "Insert = ".(int)$res."<br>";

  $res2 = mysqli_query($cnx, "SELECT * FROM parameters ORDER BY id DESC LIMIT 1");
  $data = mysqli_fetch_assoc($res2);
  //var_dump($data);

  if ($data != NULL) {
    foreach ($data as $key => $value) {
      $_SESSION[$key] = $data[$key];
      //var_dump($_SESSION[$key]);
    }
  }

  header('location:../page/admin.php');

?>
