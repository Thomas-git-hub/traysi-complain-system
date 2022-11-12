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
  <!-- datatables -->
  <link rel="stylesheet" href="../css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css">

  <title>Document</title>
</head>
<body>

<?php 
include_once("includes/sidenav.php");

include_once("includes/config/app.php");
include_once("includes/auth.php");
include_once("includes/Controller/ComplainController.php");

// Validation if user is not Logged In
include_once("includes/Controller/AuthenticationController.php");
    
$data = $authenticated->getResolvedDetails();
?>

<div class="container">
  <div class="d-flex justify-content-center">
    <div class="card card-view-message mb-5">
      <div class="card-body">
        <div class="d-flex justify-content-start flex-row">
          <a href="inbox-complain.php"><i class="bi bi-arrow-left"></i></a>
        </div>
        <div class="d-flex justify-content-start mt-3">
          <h1 class="title-message">Message</h1>&nbsp;
        </div>
        <div class="d-flex justify-content-end flex-row">
          <h1 class="message-date-time"><?=$data['time']?></h1>&nbsp;
          <h1 class="message-date-time"><?=$data['date']?></h1>
        </div>
        <div class="d-flex justify-content-center">
          <div class="card inner-card" style="width: 43rem;">
            <div class="card-body">
              <h1 class="h1-view-mes-con"><i class="bi bi-person-fill">&nbsp;</i><?=$data['fullname']?></small></h1>
              <h1 class="h1-view-mes-con"><i class="bi bi-google">&nbsp;</i><small><?=$data['email']?></small></h1>
              <h1 class="h1-view-mes-con"><i class="bi bi-telephone-fill">&nbsp;</i><small><?=$data['contact_no']?></small></h1>
              <h1 class="h1-view-mes-con mt-5"><i class="bi bi-chat-left-text-fill">&nbsp;</i></h1>
              <h1 class="h1-view-mes-con"><small style="font-weight: normal;"><?=$data['others']?></small></h1>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <h1 class="attached-image-title">Attachment</h1>
        <h1 class="attached-image-title">No Attachment</h1>
        <!-- <img src="assets/svg/notify.svg" alt="Nature" class="view-message-img" width="600" height="400"> -->
      </div>
    </div>
  </div>
</div>

<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/sidebar.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../js/buttons.print.min.js"></script>
<script type="text/javascript" src="../js/jszip.min.js"></script>
<script type="application/json" src="../js/pdfmake.min.js.map"></script>
<script type="text/javascript" src="../js/pdfmake.min.js"></script>

<script type="text/javascript" src="../js/vfs_fonts.js"></script>
<script type="text/javascript" src="../js/buttons.html5.min.js"></script>
<script type="text/javascript" src="../js/dataTables.bootstrap5.min.js"></script>

</body>
</html>