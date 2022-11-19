
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- css bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">

  <title>Report</title>
</head>
<body>
  <?php
   require("includes/sidenav.php");
   require("includes/auth.php");
   
    // Validation if user is not Logged In
    include dirname(__FILE__).'/../includes/Controller/AuthenticationController.php';
    include dirname(__FILE__).'/../includes/auth.php';
    $authenticated = new AuthenticationController;
    $data = $authenticated->authDetails();
    $authenticated->president();
  
   ?>

  <div class="row-header d-flex flex-row">
      <div class="col col-img d-flex justify-content-center">
        <img class="img-svg" src="assets/svg/otw.svg" alt="">
      </div>
    <div class="col">

          <!----- Validation Design Here Please---->
          <?php include_once("includes/message.php") ?>
          <!------------------------------------------>

      <h1 class="header-title-1">Traysi</h1>
      <h1 class="header-title-2">Complain & Report</h1>
      <h1 class="header-title-3">Management System</h1>
     
      <h1 class="header-title-4"><i class="bi bi-emoji-laughing-fill">&nbsp;</i>Hello, Welcome <?= $data['fullname']?> </h1>
    </div>
</div>


<div class="d-flex justify-content-center mt-3">
  <a class="a-mid-nav" href="driver.php">Drivers</a>
  <a class="a-mid-nav" href="violation.php"> Violation</a>
  <a class="a-mid-nav" href="inbox-complain.php">Inbox</a>
  <a class="a-mid-nav" href="#">History</a>
</div>


<div class="container">
  <div class="row mt-5">
      <div class="col d-flex justify-content-center">
        <div class="card card-president" style="width: 24rem;">
          <div class="card-body">
            <h1 class="h1-card-report d-flex justify-content-center">Number of Reports</h1>
            <h1 class="h1-card-count d-flex justify-content-center">120</h1>
          </div>
        </div>
      </div>
      <div class="col d-flex justify-content-center">
        <div class="card card-driver" style="width: 24rem;">
          <div class="card-body">
            <h1 class="h1-card-active d-flex justify-content-center">Total Number of Active Drivers</h1>
            <h1 class="h1-card-count d-flex justify-content-center">120</h1>
          </div>
        </div>
      </div>
      <div class="col d-flex justify-content-center">
        <div class="card card-driver" style="width: 24rem;">
          <div class="card-body">
            <h1 class="h1-card-inactive d-flex justify-content-center">Total Number of Inactive Drivers</h1>
            <h1 class="h1-card-count d-flex justify-content-center">120</h1>
          </div>
        </div>
      </div>
  </div>

  <div class="row mt-4 mb-3">
    <div class="col d-flex justify-content-center">
      <div class="card" style="width: 35rem;">
        <div class="card-body">
          <h5 class="card-title">Mission</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="col d-flex justify-content-center">
      <div class="card" style="width: 35rem;">
        <div class="card-body">
          <h5 class="card-title">Vision</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>
 
</div><!-- end of container -->

</body>
</html>

