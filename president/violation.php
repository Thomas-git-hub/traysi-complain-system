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
// require_once("includes/Controller/AuthenticationController.php");
include dirname(__FILE__).'/../includes/Controller/AuthenticationController.php';
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
<<<<<<< HEAD
                      <button class="btn btn-upd" data-toggle="tooltip" data-placement="bottom" title="Click to Clear Offense">
                        <i class="bi bi-dash-circle-fill"></i>
                      </button>
=======
                      <a href="#" onclick="return confirm('Are you sure you want to delete this item?'); "> 
                      <form action="includes/driver_conn.php" method="post">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>" >
                        <button class="btn btn-upd" name="clear">
                          <i class="bi bi-dash-circle-fill"> </i>
                        </button>
                      </form>
                    </a>
>>>>>>> a6dade748ff66cf9d9c972e5a9c3958695fcd0f5
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