<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- css -->
  <link rel="stylesheet" href="css/style.css">

  <title>Landing Page</title>
</head>
<body>
  <?php 
  include_once("includes/navbar.php");

  include_once("president/includes/app.php");
  include_once("president/includes/auth.php");
  $auth->isLoggedIn(); 
  ?>

 <div class="container">
    <div class="row row-system-title">
      <div class="col d-flex justify-content-center">
        <img class="cs-logo" src="assets/png/cs-logo.png" alt="tcs-logo">
      </div>
      <div class="col d-flex flex-column col-system-title">
        <h1 class="system-title-1">T R A Y S I</h1>
        <h1 class="system-title-2">Complaint & Report Management System</h1>
        <h1 class="system-title-3">Polangui, Albay</h1>
      </div>
    </div>
</div>

<div class="container-fluid">
<div class="container con-mid-con">
  <div class="row row-mid-con">
    <div class="col col-mid-con">
        <h1 class="h1-mid-con-title" style="font-size: 16pt; color: #3198f5; font-weight: 900;">FARE MATRIX OF POLANGUI TRICYCLE ROUTES</h1>
        <h1 class="h1-mid-con-title">As Recommend by the Polangui League of Tricycle Associations and Approved by the Sanggunianng Bayan of Polangui</h1>
    </div>
    <div class="row">
      <h1 class="h1-mid-con-body">I. POBLACION ROUTE (PER PASSENGER) minimum of two (2) and maximum of three (3) passenger per trip.</h1>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">A. UBALIW - 10.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">B. BASUD - 10.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">C. NAGURANG - 10.00</h1>
      </div>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">D. CENTRO - 10.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">E. GABON - 10.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">F. ILAOD - 10.00</h1>
      </div>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">G. CABANGAN(per trip) - 40.00</h1>
      </div>
    </div>
  </div>
  <div class="row">
      <h1 class="h1-mid-con-body">II. POBLACION TO THE FF. BARANGAYS (PER TRIP*) min. of 2 maximum of 3</h1>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">A. SUGCAD - 40.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">B. LANIGAY (ALONG MAIN ROAD) - 50.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">C.  SANTICON - 80.00</h1>
      </div>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">D. BALANGIBANG - 90.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">E. MATACON - 100.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">F. EAST MATACON - 100.00</h1>
      </div>
  </div>
  <div class="row">
      <h1 class="h1-mid-con-body">III. POBLACION TO THE FF. BARANGAYS (PER TRIP*) min. of 2 maximum of 3</h1>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">A. ALNAY - 40.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">B. PONSO - 50.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">C. MENDEZ 60.00</h1>
      </div>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">D. NAPO 60.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">E. BALINAD - 80.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">F. BALOGO - 100.00</h1>
      </div>
  </div>
  <div class="row">
      <h1 class="h1-mid-con-body">IV. POBLACION TO THE UPLAND BRGYS. (PER TRIP*) min. of 2 maximum of 3</h1>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">A. PINTOR - 110.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">B. CEPRES (ALONG MAIN ROAD) - 120.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">C. GAMOT - 120.00</h1>
      </div>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">D. ITARAN - 130.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">E. MAYNAGA - 140.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">F. LIDONG - 150.00</h1>
      </div>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">G. BALABA - 150.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">H. PINAGDAPUGAN - 150.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">I. DANAO - 150.00</h1>
      </div>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">J. ANOPOL - 150.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">K. AMOGUIS - 150.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">L. COTMON - 150.00</h1>
      </div>
  </div>   
</div>
</div>

<div class="container con-bot-con">
  <div class="row">
    <h5 class="d-flex justify-content-center">About Us</h5>
    <div class="col">
      <h1>hellow ph</h1>
    </div>
    <div class="col">
      <h1>hello ph</h1>
    </div>
    <div class="col">
      <h1>hello ph</h1>
    </div>
  </div>
</div>


  
</body>
</html>