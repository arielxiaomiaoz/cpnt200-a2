<?php
  // Database connection
  $conn = mysqli_connect('localhost', 'root', '', 'aviano-db');

  // check connection
  if(!$conn){
    Header("Location: 'error.php'");
    exit;
  }
?>