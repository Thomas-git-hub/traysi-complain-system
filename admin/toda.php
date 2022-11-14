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
                    <th></th>
                    <th>Toda</th>
                    <th>From</th>
                    <th>To</th>
                    <th class="data-hidden">Color</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  $servername='localhost';
                  $username='root';
                  $password='';
                  $dbname = "cs-db";
                  $conn=mysqli_connect($servername,$username,$password,"$dbname");
                    if(!$conn){
                        die('Could not Connect MySql Server:' .mysql_error());
                      }
                   
                   $query = "SELECT * FROM toda_tbl";
                   $result = mysqli_query($conn, $query);
                   if (mysqli_num_rows($result) > 0) {
                       while ($Row = mysqli_fetch_assoc($result)) { ?>
                             <tr>
                                <td><?php echo $Row["id"]; ?></td>
                                <td><?php echo $Row["toda_name"]; ?></td>
                                <td><?php echo $Row["from_point"]; ?></td>
                                <td><?php echo $Row["to_point"]; ?></td>
                                <td class="data-hidden"><?php echo $Row["color"]; ?></td>  
                                <td>
                                    <button class="btn btn-upd editbtn" data-toggle="modal" data-target="#updToda">
                                      <i class="bi bi-arrow-repeat"></i>
                                    </button>
                                </td>
                              </tr>
                            <?php }
                        }
                   ?>
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
          <button type="submit" name="insertData" class="modal-btn-upd">Enter</button>
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
        <input type="hidden" name="toda_id" id="toda_id">
        <div class="modal-body">
          <div class="form-group mt-3">
            <i class="bi bi-geo-alt-fill mx-2 mb-1"></i>
            <input type="text" class="form-control" name="todaname" id="todaname"  placeholder="Toda">
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-pin-map mx-2 mb-1"></i>
            <input type="text" class="form-control" name="todafrom"  id="todafrom" placeholder="From">
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-pin-map-fill mx-2 mb-1"></i>
            <input type="text" class="form-control" name="todaTo"  id="todato" placeholder="To">
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-palette-fill mx-2 mb-1"></i>
            <input type="text" class="form-control" name="todacolor" id="todacolor" placeholder="Color">
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" name="updateToda" class="modal-btn-upd">Update</button>
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

<script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#updToda').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#toda_id').val(data[0]);
                $('#todaname').val(data[1]);
                $('#todafrom').val(data[2]);
                $('#todato').val(data[3]);
                $('#todacolor').val(data[4]);
            });
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


    if(isset($_POST['insertData'])){
        $todaname = $_POST['toda_name'];
        $todafrom   = $_POST['toda_from'];
        $todato    = $_POST['toda_to'];
        $todacolor   = $_POST['toda_color'];
        $query = "INSERT INTO toda_tbl (toda_name, from_point, to_point,color)
                  VALUES ('$todaname','$todafrom','$todato', '$todacolor')";
        $execute = mysqli_query($conn, $query);
        if($execute=== true){
          $msg= "Data was inserted successfully";
        }
        else{
          $msg= mysqli_error($conn);
        }
        echo "<script> alert($msg); </script>";
        }


        if(ISSET($_POST['updateToda'])){
          $todaid = $_POST['toda_id'];
          $name = $_POST['todaname'];
          $tfrom = $_POST['todafrom'];
          $tto = $_POST['todaTo'];
          $tcolor = $_POST['todacolor'];
       
          $query1 = "UPDATE toda_tbl SET toda_name='$name', from_point='$tfrom', to_point='$tto', color=' $tcolor' WHERE id='$todaid'  ";
          $query_run1 = mysqli_query($conn, $query1);

          if($query_run1)
          {
              echo '<script> alesrt("Data Updated"); </script>';
          }
          else
          {
              echo '<script> alert("Data Not Updated"); </script>';
          }
        }
?>