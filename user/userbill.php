<?php

        include '../includes/connection.php';
        session_start();
        if(isset($_SESSION['ID']) && $_SESSION['Identification'] == 0){
                if(isset($_GET['q'])) {
                
                        $P_id = $_GET['q'];
                        /*Update Query For Appointments*/
                        $sql = "select * from Bills_Details where P_id = '$P_id' order by Date DESC";
                        
                        $result = $conn->query($sql);
                        /*Sample Query for cancelling the appointment    "delete from Appointments where App_ID = id"  location.reload() for reloading*/ 
                        
                        /*SELECT slot_id,time_start,time_end from slots where slot_id not in (
            select slot_id from Appointments where doctor_id = 3 and Date='2018-04-11' 
            UNION
	        select slot_id from unavailable where doctor_id = 3 and Date = '2018-04-11');  for Available slots*/               
                }
        }else{
         
         
                header('Location: ../index.php');
         
         }
?>
<!DOCTYPE html>
<html>
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
  <style>
    body{
      background-color:#E5E7E9;
    }
  </style>
</head>
<body>

<div style="background-color: #1C2833; color:#B2BABB;border-radius:5px;padding-top:1.5%;padding-bottom:1.5%;text-align:center"><h2>Bills</h2></div>
<br><br>

<!-- Repaeat this -->
<?php if($result && $result->num_rows > 0){
        while(($row = $result->fetch_assoc())){
?>
  <div class = "card card-1" style="margin-left: 0%;border-radius: 10px; margin-right: 0%; ">
  <div class = "col-sm-2"></div>
  <div class="col-sm-10">
  <div style="padding-left: 0%"><h3>Bill ID : <?php echo $row['Bill_ID']; ?></h3></div>
  <div style="padding-left: 0%"><h3>Date : <?php echo $row['Date']; ?></h3></div>
  <div style="padding-left: 0%"><h4>Reason : <?php echo $row['Reason']; ?></h4></div>
  <div style="padding-left: 0%"> <h4>Amount : <?php echo $row['Amount'];?></h4></div>
  <div style="padding-left: 0%"> <h4>Download Bill : <a href="<?php if($row['image_url'] == null) echo '#';else echo '../staff/'.$row['image_url']; ?>" download>Download</a></h4></div>
  </div>
  </div>
  <?php   }
  
   }else{ ?>
   
        <h1 style="opacity: 0.5;text-align: center">No Bills Uploaded Yet</h1> 
   <?php } ?>
  <!-- Upto this -->
  </div>
</body>
</html>
  
  
  
  
