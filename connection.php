<?php

  $servername = "localhost";
  $username = "root";
  $passwd = "mh20dj@9430";
  $dbname = "Authorization";
  
  $conn = new mysqli($servername,$username,$passwd,$dbname);
  if($conn->connect_error){
    die("Connection failed : " . $conn->connect_error);
  }
  else{
  }

?>

