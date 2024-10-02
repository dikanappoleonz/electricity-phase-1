<?php
  session_start();

  if(!isset($_SESSION['username'])){
    echo "<script> location.href='login.php' </script>";
  }

  include "config/database.php";


  if(isset($_GET['page'])){
    $page = $_GET['page'];
    include "page/". $page .".php";
  } else {
    include "page/dashboard.php";
  }
  ?>