<?php

  error_reporting(E_ALL);
  ini_set('display_errors', true);

  include_once('../include/cnx.php');

  session_start();

  session_destroy();
  //var_dump($_SESSION);

  header('location:../_index.php');

?>
