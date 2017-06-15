<?php
include("conn_init.php");
if (!$connErr){
  $tablename = 'cc_' . $_GET['tablename'];
  $fieldname = $_GET['fieldname'];
  $rate_id = intval($_GET['rateid']);

  $sql2 = "SELECT $fieldname FROM $tablename WHERE rateid = $rate_id";
  $res2 = mysqli_query($link, $sql2);
  if ($res2){
    $row2 = $res2->fetch_assoc();
    $rating = $row2[$fieldname];
  }

  //allow one review per session(cookie)
  if (isset($_SESSION['last_submit']) && time()-$_SESSION['last_submit'] < 86400 && $_SESSION['rateid'] == $rate_id)
      die($rating);
  else{
      $_SESSION['last_submit'] = time();
      $_SESSION['rateid'] = $rate_id;
  }

  //prepare query
  $sql = "UPDATE $tablename SET $fieldname = $fieldname + 1 WHERE rateid = $rate_id";
  if (mysqli_query($link, $sql)){
    //echo "data saved successfully";
    $sql1 = "SELECT $fieldname FROM $tablename WHERE rateid = $rate_id";
    $res = mysqli_query($link, $sql1);
    if ($res){
      $row = $res->fetch_assoc();
      echo $row[$fieldname];
    }
  }
  else {
    echo "cannot execute $sql.";
  }
}
?>
