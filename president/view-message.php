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

require("includes/auth.php");
require("includes/Controller/ComplainController.php");

// Validation if user is not Logged In
require_once("includes/Controller/AuthenticationController.php");
$authenticated = new AuthenticationController;
    
?>

<div class="container">
  <div class="d-flex justify-content-center">
    <div class="card card-view-message mb-5">
      <div class="card-body">
        <div class="d-flex justify-content-start flex-row">
          <a href="inbox-complain.php"><i class="bi bi-arrow-left"></i></a>
        </div>
        <?php
        if(isset($_GET['id']))
        {
          $complain_id = validateInput($db->conn, $_GET['id']);
          $complain = new ComplainController;
          $result = $complain->view($complain_id);

          if($result)
          {
            ?>
        <div class="d-flex justify-content-start mt-3">
          <h1 class="title-message">Message</h1>&nbsp;
        </div>
        <div class="d-flex justify-content-end flex-row">
          <h1 class="message-date-time"><?=$result['time']?></h1>&nbsp;
          <h1 class="message-date-time"><?=$result['date']?></h1>
        </div>
        <div class="d-flex justify-content-center">
          <div class="card inner-card" style="width: 43rem;">
            <div class="card-body">
              <h1 class="h1-view-mes-con"><i class="bi bi-person-fill">&nbsp;</i><small><?=$result['fullname']?></small></h1>
              <h1 class="h1-view-mes-con"><i class="bi bi-google">&nbsp;</i><small><?=$result['email']?></small></h1>
              <h1 class="h1-view-mes-con"><i class="bi bi-telephone-fill">&nbsp;</i><small><?=$result['contact_no']?></small></h1>
              <h1 class="h1-view-mes-con mt-5"><i class="bi bi-chat-left-text-fill">&nbsp;</i></h1>
              <h1 class="h1-view-mes-con"><small style="font-weight: normal;"><?=$result['others']?></small></h1>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <h1 class="attached-image-title">Attachment</h1>
        <h1 class="attached-image-title">No Attachment</h1>
        
        <!-- <img src="assets/svg/notify.svg" alt="Nature" class="view-message-img" width="600" height="400"> -->
      </div>
      <div class="row">
        <div class="d-flex flex-row">
          <button class="btn btn-respond" data-toggle="modal" data-target="#sendMessage"><i class="bi bi-send-fill">&nbsp;</i>Send Message</button>
          <button class="btn btn-respond"><i class="bi bi-check-circle-fill">&nbsp;</i>Process</button>
          <!-- NOTE! when process button is clicked, the page will be redirected to processing page (processing.php) -->
        </div>
      </div>
    </div>

  </div>
</div>

<!-- modal -->

<!-- Update Criteria -->
<div class="modal fade" id="sendMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-center">
        <h5 class="modal-header-title" id="exampleModalLabel">S e n d&nbsp;&nbsp; M e s s a g e </h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <form action=""  method="post" id="profFrm" onsubmit="">
        <div class="modal-body">
          <div class="form-group mt-3">
            <h1 class="h1-view-mes-con">To:&nbsp;&nbsp;<small style="font-weight: normal; font-style: italic;"><?=$result['fullname']?></small></h1>
            <!-- <input type="email" class="form-control" id="" aria-describedby="" placeholder=""> -->
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-reply-fill mx-2"></i>
            <textarea class="form-control" id="" rows="3" placeholder="Message"></textarea>
          </div>

          <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="modal-btn-upd">Send</button>
          </div>
      </form>
    </div>
  </div>
</div>
<?php
      }
      else

      {
        echo "<h4> No Record Found</h4>";
      }
    }
    else
    {
      echo "<h4> Something went wrong</h4>";
    }
?>

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