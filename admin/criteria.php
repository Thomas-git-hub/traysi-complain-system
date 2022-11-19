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
    
<title>Admin</title>

</head>
<body>

<?php include_once("includes/sidenav.php") ?>

<div class="container">
  <h1 class="page-title"><i class="bi bi-exclamation-circle-fill">&nbsp;</i>C r i t e r i a</h1>
    
  <div class="d-flex justify-content-end">
    <button class="btn col-btn-create" data-toggle="modal" data-target="#addCriteria"><i class="bi bi-plus-circle-fill">&nbsp;</i>Add Criteria</button>
  </div>

    <div class="row table">
      <table id="datatable" class="table inner-table display">
            <thead class="thead-dark">
                <tr>
                    <th>Criteria</th>
                    <th>Offense Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr> 
                    <td>Wreckless Driving</td>
                    <td>1st Offense</td>
                    <td>
                      <button class="btn btn-upd" data-toggle="modal" data-target="#hello">
                        <i class="bi bi-arrow-repeat"></i>
                      </button>
                      <button class="btn btn-upd">
                        <i class="bi bi-trash3-fill"></i>
                      </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- modal -->

<!-- Add Criteria -->
<div class="modal fade" id="addCriteria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-center">
        <h5 class="modal-header-title" id="exampleModalLabel">A d d &nbsp;&nbsp; C r i t e r i a</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <form action=""  method="post" id="profFrm" onsubmit="">
        <div class="modal-body">
          <div class="form-group mt-3">
            <i class="bi bi-card-text mx-2 mb-1"></i>
            <textarea class="form-control" id="" rows="3" placeholder="Update Criteria"></textarea>
            <!--MUST SHOW EXISTING CRITERIA -->
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-pin-map mx-2 mb-1"></i>
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected="true" disabled="disabled">Select Offense</option>
              <option value="1st offense">1st offense</option>
              <option value="2nd Offense">2nd Offense</option>
              <option value="3rd Offense">3rd Offense</option>
            </select>
          </div>

          <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="modal-btn-upd">Update</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Update Criteria -->
<div class="modal fade" id="hello" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-center">
        <h5 class="modal-header-title" id="exampleModalLabel">U p d a t e&nbsp;&nbsp; C r i t e r i a</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <form action=""  method="post" id="profFrm" onsubmit="">
        <div class="modal-body">
          <div class="form-group mt-3">
            <i class="bi bi-card-text mx-2 mb-1"></i>
            <textarea class="form-control" id="" rows="3" placeholder="Update Criteria"></textarea>
            <!--MUST SHOW EXISTING CRITERIA -->
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-pin-map mx-2 mb-1"></i>
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected="true" disabled="disabled">Select Offense</option>
              <option value="1st offense">1st offense</option>
              <option value="2nd Offense">2nd Offense</option>
              <option value="3rd Offense">3rd Offense</option>
            </select>
          </div>

          <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="modal-btn-upd">Update</button>
          </div>
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