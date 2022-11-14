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
require("includes/Controller/ComplainController.php");

// Validation if user is not Logged In
require_once("includes/Controller/AuthenticationController.php");
$authenticated = new AuthenticationController;
    
$data = $authenticated->authDetails();
?>

<div class="container">
  <h1 class="page-title"><i class="bi bi-envelope-paper-fill">&nbsp;</i>V i e w &nbsp;&nbsp; C o m p l a i n</h1>

           <!----- Validation Design Here Please---->
           <?php include_once("includes/message.php") ?>
            <!------------------------------------------>
    <div class="row table mt-5">
      <table id="datatable" class="table inner-table display">
            <thead class="thead-dark">
                <tr>
                    <th>From</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = new ComplainController;
                $result = $data->getUserComplain();
                if($result)
                {
                  foreach($result as $row)
                  {
                ?>
                <tr> 
                    <td><?= $row['fullname'] ?></td>
                    <td><a href="view-message.php?id=<?= $row['id'] ?> " ><?= $row['others'] ?></a></td>
                    <td><?= $row['date'] ?></td>
                    <td><?= $row['time'] ?></td>
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