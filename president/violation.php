<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    
<title>President</title>

</head>
<body>

<?php 
include_once("includes/sidenav.php");

require("includes/auth.php");
require("includes/Controller/ComplainController.php");

// Validation if user is not Logged In
require_once("includes/Controller/AuthenticationController.php");
$authenticated = new AuthenticationController;
    
$data = $authenticated->authDetails();

?>

<div class="container">
  <h1 class="page-title"><i class="bi bi-exclamation-circle-fill">&nbsp;</i>V i o l a t i o n</h1>
    
  <!-- <div class="d-flex justify-content-end">
    <button class="btn col-btn-create" data-toggle="modal" data-target="#addCrit"><i class="bi bi-plus-circle-fill">&nbsp;</i>Add Criteria</button>
  </div> -->

  <!----- Validation Design Here Please---->
  <?php include_once("includes/message.php") ?>
  <!------------------------------------------>

    <div class="row table mt-5">
      <table id="datatable" class="table inner-table display">
            <thead class="thead-dark">
                <tr>
                    <th>Offense Commited</th>
                    <th>Name</th>
                    <th>Plate No.</th>
                    <th>Clear Offense</th>
                </tr>
            </thead>
            <tbody>
              <?php
              $data = new ComplainController;
              $result = $data->getViolation();
              if($result)
              {
                foreach($result as $row)
                {
              ?>
                <tr> 
                    <td><?= $row['type'] ?></td>
                    <td><?= $row['fullname'] ?></td>
                    <td><?= $row['plate_no'] ?></td>
                    <td>
                      <button class="btn btn-upd">
                        <i class="bi bi-dash-circle-fill"></i>
                      </button>
                    </td>
                </tr>
                <?php
                  }

                }
                else
                {
                  echo "NO RECORD FOUND";
                }
              ?>
            </tbody>
        </table>
    </div>
</div>

<!-- modal -->

<!-- Update Criteria -->
<div class="modal fade" id="addCrit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-center">
        <h5 class="modal-header-title" id="exampleModalLabel">U p d a t e &nbsp;&nbsp; C r i t e r i a</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <form action=""  method="post" id="profFrm" onsubmit="">
        <div class="modal-body">
          <div class="form-group mt-3">
            <i class="bi bi-card-text"></i>
            <textarea class="form-control" id="" rows="3" placeholder="Change Criteria"></textarea>
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-pin-map mx-2 mb-1"></i>
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected="true" disabled="disabled">Change Offense</option>
              <option value="1st offense">1st offense</option>
              <option value="2nd Offense">2nd Offense</option>
              <option value="3rd Offense">3rd Offense</option>
            </select>
          </div>

          <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="modal-btn-upd">Update</button>
          </div>
      </form>
    </div>
  </div>
</div>


<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../js/buttons.print.min.js"></script>
<script type="text/javascript" src="../js/jszip.min.js"></script>
<script type="application/json" src="../js/pdfmake.min.js.map"></script>
<script type="text/javascript" src="../js/pdfmake.min.js"></script>

<script type="text/javascript" src="../js/vfs_fonts.js"></script>
<script type="text/javascript" src="../js/buttons.html5.min.js"></script>
<script type="text/javascript" src="../js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function () {
        $('#datatable').DataTable();
    });
</script>

</body>
</html>