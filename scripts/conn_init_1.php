<?php
  include("db_connect.php");
  $link = mysqli_connect($host, $user, $pass, $dbname);
  $connErr = false;
  // Check connection
  if($link === false){
    $connErr = true;
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  ?>
