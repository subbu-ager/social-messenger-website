<?php

 include('connect.php');

 error_reporting(0);

 session_start();

 session_unset();

  header('location:signin.php');

?>