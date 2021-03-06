<?php
        include 'includes/connection.php';
        
        session_start();

        //$_SESSION['url'] = $_SERVER['REQUEST_URI'];
        
        $sql = "select distinct(dept_name),image_url from Doctor_department";
        
        $result = $conn->query($sql);
         
        

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
  <script src = "js/JiSlider.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  <script src = "js/jquery.min.js"></script>
</head>
<body>

<?php include "mainheader.php"; ?>
<div class="banner1 jarallax">
	</div>

<div class="services-breadcrumb" style="padding-top: 1%">
		<div class="container">
			<ul>
				<li><a href="index.html" style="font-family: Balthazar; font-size: 1.4em">Home</a><i>|</i></li>
				<li style="font-family: Balthazar; font-size: 1.4em">Departments</li>
			</ul>
		</div>
	</div>
</div>
  <div class = "container-fluid">
  <!-- dep name card -->
  <?php if($result && $result->num_rows > 0){
        while(($row = $result->fetch_assoc())){
?>
  <div class="col-sm-3">
  <div class = "card card-1">
  <div style="margin-right: 4%; margin-left: 4%; padding-top: 4%">
  <img width="100%" src="<?php  if($row['image_url'] == null) echo 'Images/images/doc.jpg'; else echo $row['image_url']; ?>">
  <div style="text-align: center;"><h4><a href="doctorlist.php?q=<?php echo $row['dept_name']; ?>"><?php  echo $row['dept_name'];  ?></a></h4></div>
  </div>
  </div>
  </div>
  <?php }
     }
  ?>
  <!-- end -->
</div>
</body>
</html>
