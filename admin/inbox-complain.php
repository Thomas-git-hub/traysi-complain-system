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
  <h1 class="page-title"><i class="bi bi-exclamation-triangle-fill"></i>&nbsp;</i>V i e w &nbsp;&nbsp; C o m p l a i n</h1>

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
                <tr> 
                    <td>Peter Griffin</td>
                    <td><a href="view-complain.php">I hate the driver</a></td>
                    <td>11/04/2022</td>
                    <td>11:52pm</td>
                </tr>
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