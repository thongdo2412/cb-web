<?php
  session_start();
  $_SESSION[$page] = $pid;
  include("../scripts/db_connect.php");
  $link = mysqli_connect($host, $user, $pass, $dbname);
  // Check connection
  if($link === false){
    $connErr = true;
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  ?>
