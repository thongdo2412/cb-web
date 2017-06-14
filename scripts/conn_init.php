<?php
  if(!isset($_COOKIE['CityBeau'])){
    session_start();
    $id = session_id();
    setcookie('CityBeau',serialize($id),time() + (86400 * 30),'/','.citybeauty.com');
  }
  else{
    $id = unserialize($_COOKIE['CityBeau']);
    session_id($id);
    session_start();
  }

  $_SESSION[$page] = $pid;
  include("db_connect.php");
  $link = mysqli_connect($host, $user, $pass, $dbname);
  $connErr = false;
  // Check connection
  if($link === false){
    $connErr = true;
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  ?>
