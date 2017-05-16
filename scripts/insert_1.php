<?php
include ("conn_init.php");
$file = fopen("../temp.txt","w");
if (!$connErr){
  $tablename = 'cc_' . $_GET['tablename'];
  fwrite($file, $tablename . "\n");
  $fieldname = $_GET['fieldname'];
  fwrite($file, $fieldname . "\n");
  $rate_id = intval($_GET['rateid']);
  fwrite($file, $rate_id . "\n");
  //prepare query
  $sql = "UPDATE $tablename SET $fieldname = $fieldname + 1 WHERE rateid = $rate_id";
  fwrite($file,$sql);
  if (mysqli_query($link, $sql)){
    echo "data saved successfully";
  }
  else {
    echo "cannot execute the query";
  }
}
fclose($file);
?>
