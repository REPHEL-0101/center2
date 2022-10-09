<?php

  $uname=$_POST["uname"];

  session_start();


  if ($uname=='admin@csc.com')
  {
    $_SESSION["um"] = "ad";
    header('Location: admindashboard.php');
  }
  else if ($uname=='branch@csc.com')
  {
    $_SESSION["um"] = "bd";
    header('Location: ./branchadmin.php');
  }
  else if ($uname=='student@csc.com')
  {
    $_SESSION["um"] = "sd";
    header('Location: ./student.php');
  }else if ($uname=='client@csc.com')
  {
    $_SESSION["um"] = "cd";
  header('Location: ./clientadmin.php');
  }


 ?>
