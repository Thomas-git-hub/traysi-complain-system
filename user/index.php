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
   
    
    // Validation if user is not Logged In
    // require_once("includes/Controller/AuthenticationController.php");
    include dirname(__FILE__).'/../includes/Controller/AuthenticationController.php';
    $authenticated = new AuthenticationController;
   ?>

<div class="row">
  <div class="d-flex justify-content-end"></div>
</div>
<div class="container">
<h1 class="report-title"><i class="bi bi-exclamation-triangle-fill">&nbsp;</i>Report your Concern</h1>
  <div class="row">
    <div class="col">
      <div class="d-flex justify-content-center">
        
        <div class="card card-1" style="width:48rem;">
          <div class="card-body">
          <form>
          <div class="form-group">
            <!-- <label for="exampleFormControlSelect1">Select Toda/Route</label> -->
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected="true" disabled="disabled">Select Toda/Route</option>
              <option>Toda1</option>
              <option>Toda2</option>
              <option>Toda3</option>
            </select>
          </div>
          <div class="form-group">
            <!-- <label for="exampleFormControlSelect1">Select Plate Number</label> -->
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected="true" disabled="disabled">Select Plate Number</option>
              <option>plateno01</option>
              <option>plateno02</option>
            </select>
          </div>
          <div class="form-group">
            <!-- <label for="exampleFormControlSelect1">Select Plate Number</label> -->
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected="true" disabled="disabled">Select Your Complain</option>
              <option>plateno01</option>
              <option>plateno02</option>
              <option>others</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">State your Complain <small style="font-style: italic; font-size: 9pt;">(Optional)</small> </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="3"></textarea>
          </div>
          <div class="form-group" style="border-bottom: 1px solid #00328f;">
            <div class="custom-file mb-3">
              <input type="file" class="custom-file-input" id="inputGroupFile01">
            </div>
          </div>
          <button type="button" class="btn mt-4"><i class="bi bi-send-fill"></i>Send</button>
        </form>
          </div>
        </div>    
      </div>
    </div><!-- end of first col -->

    <div class="col">
      <div class="card card-2">
        <div class="card-body">
        <?php $data = $authenticated->authUserDetails() ?>
          <h5 class="card-title card-2-title"><i class="bi bi-person-circle">&nbsp;</i>Welcome <?= $data['fullname'] ?>!</h5>
          <h6 class="card-subtitle mt-2 mb-3">We're here to help you with your recent tricycle experience.</h6>
          <h1 class="d-flex justify-content-center card-heart-icon" style="color: #fff;"><i class="bi bi-chat-heart-fill"></i></h1>
          <p class="card-text">We, the Polangui League of Tricycle Associations, care and value your safety.</p>
        </div>
      </div>
    </div><!-- end of second col -->
  </div>

  <!-- <div class="row">
    <div class="col d-flex justify-content-center">
      <div class="card mt-4" style="width: 100rem;">
        <div class="card-body">
          <h5 class="card-title">Criteria for Complains</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>  
    </div>   
  </div>end of third col -->

</div><!-- end of container -->
  
</body>
</html>