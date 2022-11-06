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
  <!-- datatables -->
  <link rel="stylesheet" href="../css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css">

  <title>Document</title>
</head>
<body>

<?php include_once("includes/sidenav.php") ?>

<div class="container">
  <h1 class="page-title"><i class="bi bi-envelope-paper-fill">&nbsp;</i>I n b o x</h1>
    <div class="row table">
			<table id="datatable" class="table inner-table display">
		        <thead class="thead-dark">
		            <tr>
		                <th>From</th>
                    <th class="data-hidden">Toda</th>
		                <th>Message</th>
		                <th>Time</th>
		                <th>Date</th>
		            </tr>
		        </thead>
		        <tbody>
		            <tr> 
		            	  <td>John Doe</td>
                    <td class="data-hidden">toda1</td>
		                <td><a href="view-message.php">We want to ask for your time on monday</a></td>
		                <td>3:57pm</td>
		                <td>11/01/2022</td>
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