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
  <h1 class="page-title"><i class="bi bi-people-fill">&nbsp;</i>L i s t &nbsp;&nbsp; o f &nbsp;&nbsp; D r i v e r s</h1>

    <div class="row table mt-5">
      <table id="datatable" class="table inner-table display">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Plate No.</th>
                    <th>Toda</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr> 
                    <td>John Doe</td>
                    <td>plateno01</td>
                    <td>Toda1</td>
                    <td>Active</td>
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
        <h5 class="modal-header-title" id="exampleModalLabel">C r e a t e &nbsp;&nbsp; N e w &nbsp;&nbsp; P r e s i d e n t</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <form action=""  method="post" id="profFrm" onsubmit="">
        <div class="modal-body">
          <div class="form-group mt-3">
            <i class="bi bi-geo-alt-fill mx-2 mb-1"></i>
            <input type="text" class="form-control" name="toda_name" id="" placeholder="Toda">
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-pin-map mx-2 mb-1"></i>
            <input type="text" class="form-control" name="toda_from" id="" placeholder="From">
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-pin-map-fill mx-2 mb-1"></i>
            <input type="text" class="form-control" name="toda_to" id="" placeholder="To">
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-palette-fill mx-2 mb-1"></i>
            <input type="text" class="form-control" name="toda_color" id="" placeholder="Color">
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" name="submit" class="modal-btn-upd">Enter</button>
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
<?php

    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "cs-db";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }


    if(isset($_POST['submit'])){
        $todaname = $_POST['toda_name'];
        $todafrom   = $_POST['toda_from'];
        $todato    = $_POST['toda_to'];
        $todacolor   = $_POST['toda_color'];
$query = "INSERT INTO toda_tbl (toda_name, from_point, to_point,color)
          VALUES ('$todaname','$todafrom','$todato', '$todacolor')";
$execute = mysqli_query($conn, $query);
if($execute=== true){
  $msg= "Data was inserted successfully";
}else{
  $msg= mysqli_error($conn);
}
echo $msg;
}

?>