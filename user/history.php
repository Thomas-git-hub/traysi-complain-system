<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- css bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- datatables -->
  <link rel="stylesheet" href="../css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css">

  <title>Document</title>
</head>
<body>

<?php include_once("includes/sidenav.php") ?>

<div class="container">
<h1 class="page-title"><i class="bi bi-clock-history">&nbsp;</i>H i s t o r y</h1>
  <div class="row table">
			<table id="datatable" class="table inner-table display">
		        <thead class="thead-dark">
		            <tr>
		                <th>Toda</th>
                    <th>Plate No.</th>
		                <th>Status</th>
		                <th>Action</th>
		            </tr>
		        </thead>
		        <tbody>
		            <tr> 
		            	  <td>Toda1</td>
                    <td>plate01</td>
		                <td>recieved</td>
		                <td>clear</td>
		            </tr>
		        </tbody>
		    </table>
	</div>
</div>

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

<script>
	$(document).ready(function () {
        $('#datatable').DataTable();
        responsive: true
    });
</script>

</body>
</html>