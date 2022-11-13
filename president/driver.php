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

<?php 
include_once("includes/sidenav.php");

require("includes/auth.php");
require("includes/Controller/DriverController.php");

    // Validation if user is not Logged In
    require_once("includes/Controller/AuthenticationController.php");
    $authenticated = new AuthenticationController;
    $data = $authenticated->authDetails();
?>

<div class="container">
  <h1 class="page-title"><i class="bi bi-people-fill">&nbsp;</i>M a n a g e &nbsp;&nbsp; D r i v e r s</h1>

  <!----- Validation Design Here Please---->
  <?php include_once("includes/message.php") ?>
  <!------------------------------------------>
  
  <div class="d-flex justify-content-end">
    <button class="btn col-btn-create" data-toggle="modal" data-target="#addDriver"><i class="bi bi-plus-circle-fill">&nbsp;</i>Add New Driver</button>
  </div>

    <div class="row table">
      <table id="datatable" class="table inner-table display">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Plate No.</th>
                    <th class="data-hidden">Contact No.</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <?php
                $driver = new DriverController;
                $result = $driver->index();
                if($result)
                {
                  foreach($result as $row)
                  {
                    ?>
                  <tr> 
                    <td><?= $row['fullname'] ?></td>
                    <td><?= $row['plate_no'] ?></td>
                    <td class="data-hidden"><?= $row['contact_no'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['status'] ?></td>
                    <td>
                      <button class="btn-enable px-3 py-1">Enabled</button>
                      <button class="btn-disable px-3 py-1">Disabled</button>
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

<!-- Create New Toda -->
<div class="modal fade" id="addDriver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-center">
        <h5 class="modal-header-title" id="exampleModalLabel">C r e a t e &nbsp;&nbsp; N e w &nbsp;&nbsp; D r i v e r</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <form action="includes/driver_conn.php" onsubmit="" id="theform" method="POST" >
        <div class="modal-body">
          <div class="form-group mt-3">
            <i class="bi bi-person-circle mx-2 mb-1"></i>
            <input type="text" class="form-control" name="fullname" id="" placeholder="Name" required>
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-123 mx-2 mb-1"></i>
            <input type="text" class="form-control" name="plate_no" id="" placeholder="Plate No." required>
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-telephone-fill mb-1"></i>
            <input type="text" class="form-control" name="contact_no" id="contactField" name="phone" onkeyup=" return validatephone(this.value);" placeholder="Contact (09)">
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-envelope-fill mx-2 mb-1"></i>
            <input type="email" class="form-control" name="email" id="" placeholder="@email.com" required>
          </div>
          <div class="form-group mt-3">
            <input type="text" hidden class="form-control" name="toda_id" value="<?= $data['toda_id'] ?>" id="">
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" name= "save" class="modal-btn-upd">Enter</button>
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
    function validatephone(phone)
  	{
  		phone = phone.replace(/[^0-9]/g,'');
  		$("#contactField").val(phone);
  		if( phone == '' || !phone.match(/^0[0-9]{10}$/) )
  			{
  				$("#contactField").css({'background':'#FFEDEF' , 'border':'solid 1px red'});
  				
  				return false;
  			}
  		else
  			{
  				$("#contactField").css({'background':'#99FF99' , 'border':'solid 1px #99FF99'});
  			return true;	
  			}
      }
  </script>

<script>
  $(document).ready(function () {
        $('#datatable').DataTable();
    });
</script>


</body>
</html>