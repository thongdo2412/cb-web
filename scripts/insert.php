<?php

  include("../scripts/db_connect.php");
  $link = mysqli_connect($host, $user, $pass, $dbname);
  // Check connection
  if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  // Escape user inputs for security
  $first_name = mysqli_real_escape_string($link, $_POST['fname']);
  $email_address = mysqli_real_escape_string($link, $_POST['email']);
  $subject = mysqli_real_escape_string($link, $_POST['subject']);
  $rating = intval($_POST['rating']);
  $message = mysqli_real_escape_string($link, $_POST['message']);

  // attempt insert query execution
  $sql = "INSERT INTO cc_undereye (fname, email,subject,message,rate) VALUES ('$first_name', '$email_address','$subject','$message',$rating)";
  if(mysqli_query($link, $sql)){
    echo "Data successfully Saved.";
  } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
  // close connection
  mysqli_close($link);
?>
