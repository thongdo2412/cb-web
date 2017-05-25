<?php
  if(!isset($_COOKIE['CityBeau'])){
    session_start();
    $sid = session_id();
    setcookie('CityBeau',serialize($sid),time() + (86400 * 7),'/','.citybeauty.com');
  }
  else{
    $sid = unserialize($_COOKIE['CityBeau']);
    session_id($sid);
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
