<?php
  session_start();
  //get the page and table name
  $tablename = "cc_" . $_SESSION[$page];
  if (!$connErr){
    // Escape user inputs for security
    $action = empty($_POST['action']) ? '' : $_POST['action'];
    if ($action == "submit_review"){
      $first_name = mysqli_real_escape_string($link, $_POST['fname']);
      $email_address = mysqli_real_escape_string($link, $_POST['email']);
      $subject = mysqli_real_escape_string($link, $_POST['subject']);
      $rating = intval($_POST['rating']);
      $message = mysqli_real_escape_string($link, $_POST['message']);
      $uid = session_id();

      if ($_POST['recradio'] == 'yes') {//check radio button for recommendation
        $recommend = 1;
      }
      else {
        $recommend = 0;
      }
      $date = date('Y-m-d'); //get the current date of the review post

      //allow one review per session(cookie)
      if (isset($_SESSION['last_submit']) && time()-$_SESSION['last_submit'] < 2592000)
          die('Post limit exceeded. Please try later!');
      else
          $_SESSION['last_submit'] = time();

      // attempt insert query execution
      $sql = "INSERT INTO $tablename (fname, email,subject,message,rate,recommend,postdate,uid) VALUES ('$first_name', '$email_address','$subject','$message',$rating,$recommend,'$date','$uid')";
      if(mysqli_query($link, $sql)){
        echo "Data successfully Saved.";
        $redirectTo = 'Location:' . $_SESSION[$page] . '.php';
        header($redirectTo);
      } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
      // close connection
      mysqli_close($link);
    }
  }
?>
