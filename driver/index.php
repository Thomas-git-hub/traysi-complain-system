s<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- datatables -->
  <link rel="stylesheet" href="../css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css">
  <!-- css bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">

  <title>Report</title>
</head>
<body>
<?php

    // Validation if user is not Logged In
    include dirname(__FILE__).'/../includes/Controller/AuthenticationController.php';
    $authenticated = new AuthenticationController;
   
    $authenticated->driver();
     $data = $authenticated->authDriverDetails();
?>

<div class="container">
  <div class="row">
    <div class="col">
        <a class="a-logout" href=""><i class="bi bi-box-arrow-right">&nbsp;</i>Logout</a>
    </div>
  </div>
</div>

<div class="container-fluid row-welcome">
    <h1 class="h1-welcome">Complaint & Report Management System</h1>
    <h1 class="h1-welcome-driver"><i class="bi bi-person-circle">&nbsp;</i>Welcome <?= $data['fullname'] ?>!</h1>
</div>

<div class="container">
  <div class="row">
    <h1 class="h1-inbox-title">Inbox</h1>
  </div>
  <div class="table-align">
    <div class="row table">
      <table id="datatable" class="table inner-table display">
            <thead class="thead-dark">
                <tr>
                    <th>Passenger</th>
                    <th>Offense</th>
                    <th class="data-hidden">Message</th>
                    <th >View</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr> 
                    <td>John Doe</td>
                    <td>Foul Word</td>
                    <td class="data-hidden">sample messgae</td>
                    <td><a href="view-message.php"><i class="bi bi-eye-fill"></i></a></td>
                    <td>11/11/2022</td>
                </tr>
            </tbody>
        </table>
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