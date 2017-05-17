<?php
include ("conn_init.php");
if (!$connErr){
  $tablename = 'cc_' . $_GET['tablename'];
  $fieldname = $_GET['fieldname'];
  $rate_id = intval($_GET['rateid']);

  //prepare query
  $sql = "UPDATE $tablename SET $fieldname = $fieldname + 1 WHERE rateid = $rate_id";
  if (mysqli_query($link, $sql)){
    echo "data saved successfully";
  }
  else {
    echo "cannot execute the query";
  }
}
?>
