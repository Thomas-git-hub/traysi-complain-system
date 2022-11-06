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
  <h1 class="page-title"><i class="bi bi-geo-alt-fill">&nbsp;</i>T o d a</h1>
    
  <div class="d-flex justify-content-end">
    <button class="btn col-btn-create" data-toggle="modal" data-target="#newToda"><i class="bi bi-plus-circle-fill">&nbsp;</i>Create</button>
  </div>

    <div class="row table">
      <table id="datatable" class="table inner-table display">
            <thead class="thead-dark">
                <tr>
                    <th>Toda</th>
                    <th>From</th>
                    <th>To</th>
                    <th class="data-hidden">Color</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <tr> 
                    <td>Toda1</td>
                    <td>BUPC</td>
                    <td>Centro</td>
                    <td class="data-hidden">Red</td>
                    <td>
                      <button class="btn btn-upd" data-toggle="modal" data-target="#updToda">
                        <i class="bi bi-arrow-repeat"></i>
                      </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- modal -->

<!-- Create New Toda -->
<div class="modal fade" id="newToda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-center">
        <h5 class="modal-header-title" id="exampleModalLabel">N e w &nbsp;&nbsp; T o d a</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <form action=""  method="post" id="profFrm" onsubmit="">
        <div class="modal-body">
          <div class="form-group mt-3">
            <i class="bi bi-geo-alt-fill mx-2 mb-1"></i>
            <input type="text" class="form-control" id="" placeholder="Toda">
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-pin-map mx-2 mb-1"></i>
            <input type="text" class="form-control" id="" placeholder="From">
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-pin-map-fill mx-2 mb-1"></i>
            <input type="text" class="form-control" id="" placeholder="To">
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-palette-fill mx-2 mb-1"></i>
            <input type="text" class="form-control" id="" placeholder="Color">
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="modal-btn-upd">Enter</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Update Toda -->
<div class="modal fade" id="updToda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-center">
        <h5 class="modal-header-title" id="exampleModalLabel">U p d a t e</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <form action=""  method="post" id="profFrm" onsubmit="">
        <div class="modal-body">
          <div class="form-group mt-3">
            <i class="bi bi-geo-alt-fill mx-2 mb-1"></i>
            <input type="text" class="form-control" id="" placeholder="Toda">
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-pin-map mx-2 mb-1"></i>
            <input type="text" class="form-control" id="" placeholder="From">
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-pin-map-fill mx-2 mb-1"></i>
            <input type="text" class="form-control" id="" placeholder="To">
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-palette-fill mx-2 mb-1"></i>
            <input type="text" class="form-control" id="" placeholder="Color">
          </div>
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