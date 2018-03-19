<?php

  $server = "localhost";
  $user = "root";
  $pass= "M1g7gcbF";
  $dbname = "Newsy";

  $conn = new mysqli($server,$user,$pass,$dbname);
  if($conn->connect_error)
   die("Connection : ".$conn->connect_error);
  else{
  }
?>
