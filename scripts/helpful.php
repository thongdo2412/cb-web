<?php
include("conn_init.php");
if (!$connErr){
  $tablename = 'cc_' . $_GET['tablename'];
  $fieldname = $_GET['fieldname'];
  $rate_id = intval($_GET['rateid']);

  //allow one review per session(cookie)
  if (isset($_SESSION['last_submit']) && time()-$_SESSION['last_submit'] < 60)
      die('<script>alert("You already clicked on helpful. Please try again later!!")</script>');
  else
      $_SESSION['last_submit'] = time();

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
