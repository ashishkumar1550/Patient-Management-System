<?php

        include '../includes/connection.php';
        
        session_start();
        if(isset($_SESSION['ID']) && $_SESSION['Identification'] == 1){
        
                $doctor_id = $_SESSION['ID'];
        
                $sql = "select * from Doctor where doctor_id = '".$doctor_id."'";
                $result = $conn->query($sql);
                if($result){
                
                        $row = $result->fetch_assoc();
                }
        
        }else{
        
                 header('Location: ../index.php');
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
  <link href='https://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Stalinist One' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  <script src = "../js/jquery.min.js"></script>
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>
  <link href="../assets/css/demo.css" rel="stylesheet" />
  <script src="/assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/bootstrap-material-design.js"></script>
<script src="../assets/js/plugins/moment.min.js"></script>
<script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<script src="../assets/js/plugins/nouislider.min.js"></script>
<script src="../assets/js/material-kit.js?v=2.0.0"></script>
  <link rel="stylesheet" href="BS4/assets/css/material-kit.css">
  <style>
    body{
      background-color:#E5E7E9;
    }
  </style>
</head>
<body bgcolor="maroon">
<?php  include 'mainheader.php';?>

<div class="container-fluid" style="padding-top: 5%;">
  <div class = "container-fluid">
  <!-- HISTORY -->
  <div class = "col-sm-3">
  <div class="card" style="width: 35rem;">
  <img class="card-img-top img-responsive" width="100%" src="<?php  if($row['image_url'] == null) echo '../Images/images/t3.jpg'; else echo $row['image_url']; ?>" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="doctorappointments.php?q=<?php  echo $row['doctor_id']; ?>" target = "frame" class="btn btn-primary" style="width: 45%;margin-left:4%">Appointments</a>
    <a href="doctorprofile.php?q=<?php  echo $row['doctor_id']; ?>" class="btn btn-primary" style="width: 45%;margin-left:4%">Update Profile</a>
    <a href="doctorreviews.php?q=<?php  echo $row['doctor_id']; ?>" target = "frame" class="btn btn-primary" style="width: 45%">Reviews</a>
  </div>
</div>
  </div>
  <div class = "col-sm-9" style="overflow: auto; max-height: 100vh;">
  <iframe name="frame" src="doctorappointments.php?q=<?php  echo $row['doctor_id']; ?>" width="100%" height="600px" frameborder="0"></iframe></div>
</div>

</body>


