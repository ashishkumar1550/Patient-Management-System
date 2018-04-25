<?php

        include 'includes/connection.php';
        
        session_start();
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        
                $P_id = $conn->escape_string($_POST['pid']);
                $Reason = $conn->escape_string($_POST['reason']);        
                $Amount = $conn->escape_string($_POST['amount']);
                $GST = $conn->escape_string($_POST['Password']);
                //$Date = $conn->escape_string($_POST['pass']);
                
                $update = "insert into Bills_Details(P_id,Reason,Amount,GST,Date) values ('".$P_id."','".$Reason."','".$Amount."','".$GST."','now()')";
        
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/navbar.css">
  <link href='https://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Stalinist One' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  <script src = "../js/jquery.min.js"></script>
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>
  <link href="../assets/css/demo.css" rel="stylesheet" />
  <script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/bootstrap-material-design.js"></script>
<script src="../assets/js/plugins/moment.min.js"></script>
<script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<script src="../assets/js/plugins/nouislider.min.js"></script>
<script src="../assets/js/material-kit.js?v=2.0.0"></script>
<script type="text/javascript" src = "../js/login.js"></script>
  <link rel="stylesheet" href="BS4/assets/css/material-kit.css">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <style>
    body{
      background-color:#E5E7E9;
    }
  </style>
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
        <li><a href="../index.php">Home</a></li>
        <li><a href="../Departments.php">Departments</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login-signup/php/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login-signup/php/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
      </div>
      </div>
      </nav>
</div>
<div class = "container" style="margin-top: 8%">
  <div class="form">
    <div id="signup">   
      <form action="" method="post">
      <h1 style="color:white">ADD A BILL</h1><br>
      <div class="field-wrap">
        <label>
          Patient ID<span class="req">*</span>
        </label>
        <input type="text" name = "pid"required autocomplete="off"/>
      </div>
      
      <div class="field-wrap">
        <label>
          Reason<span class="req">*</span>
        </label>
        <input type="text" name="reason" required autocomplete="off"/>
      </div>
      <div class="field-wrap">
        <label>
          Amount<span class="req">*</span>
        </label>
            <input type="number" name="amount" autocomplete="off"/>
      </div>
      
      
      <div class="field-wrap">
        <label>
          GST Number<span class="req">*</span>
        </label>
        <input type="text" id = "gst" name="Password"required autocomplete="off"/>
      </div>
      
      <!--
      <div class="field-wrap">
        <label>
          Datetime<span class="req">*</span>
        </label>
        <input type="datetime" id = "datetime" name="Pass"required autocomplete="off"/>
        <span id="message"></span>
        
        
      </div>
      -->
      <input type="submit" id = "buttonActivate" name = "Add" class="button button-block"/>
      </form>
</div>
</div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="../js/login.js"></script>

</body>
</html>
