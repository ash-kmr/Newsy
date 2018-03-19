<?php

  include('connection.php');
  session_start();
  if($_SERVER["REQUEST_METHOD"] == "POST"){

     $username = $conn->escape_string($_POST['fname']);
     $password = $conn->escape_string($_POST['lname']);
     
     $sql = "select * from User_Authentication where User_ID = '".$username."'"." and Password = '".$password."'";
     $result = $conn->query($sql);
   
     if($result->num_rows > 0){
      
      
        $_SESSION['login_user'] = $username;
        
        header("location: welcome.php");

    }
    else
     $error = "Your Login Name or Password is invalid";
   
    }


  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="css/JiSlider.css">
  <link href='https://fonts.googleapis.com/css?family=Stalinist One' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <script src = "js/JiSlider.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  <script src = "js/jquery.min.js"></script>
</head>
<body>
<div class = "mynav">
   <nav class="navbar navbar-inverse navbar-fix navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style = "color:black; font-size:1.5em" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </div>
      </div>
      </nav>
<div class = "separator container-fluid"></div>
</div><div class = "container" style="padding-top: 10%;padding-right: 10%;padding-left: 10%">
  <div class = "col-sm-12" style="background-color:darkblue;border-radius: 50px; padding-left: 15%; padding-right: 15% ">
  <br>
  <h1 style="color:white; font-family: Balthazar; text-align: center; font-size: 
  4em">Login</h1><br><br>
  <h4>text for invalid</h4>
  <form action="" method="post">
  <label for="fid" style="font-size: 1.5em; font-family: Balthazar">User ID</label>
  <input type="text" id="fid" name="fid" placeholder="User ID" required>
  <label for="fname" style="font-size: 1.5em; font-family: Balthazar">Name</label>
  <input type="text" id="fname" name="fname" placeholder="User ID" required>
  <label for="gender" style="font-size: 1.5em; font-family: Balthazar">Gender</label>
  <input type="text" id="gender" name="gender" placeholder="User ID" required>
  <label for="lname" style="font-size: 1.5em;margin-top: 5%; font-family: Balthazar">Password</label>
  <input style = "color:white" type="password" id="lname" name="lname" placeholder="Password" required>
  <div style="text-align: center; margin-top: 10%;margin-bottom: 10%"><button type="submit" class = "buttonlogin button3">Signup</button></div>
  </form>
</div>
</div>
</body>
</html>
