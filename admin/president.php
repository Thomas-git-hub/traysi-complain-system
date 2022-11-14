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
  <h1 class="page-title"><i class="bi bi-people-fill">&nbsp;</i>M a n a g e &nbsp;&nbsp; P r e s i d e n t</h1>
    
  <div class="d-flex justify-content-end">
    <button class="btn col-btn-create" data-toggle="modal" data-target="#newToda"><i class="bi bi-plus-circle-fill">&nbsp;</i>New President</button>
  </div>

    <div class="row table">
      <table id="datatable" class="table inner-table display">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Assigned Toda</th>
                    <th>Status</th>
                    <th>Action</th>
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
                   
                   $query = "SELECT president.fullname, toda_tbl.toda_name, president.status FROM `president` INNER JOIN toda_tbl ON president.toda_id=toda_tbl.id";
                   $result = mysqli_query($conn, $query);
                   if (mysqli_num_rows($result) > 0) {
                       while ($Row = mysqli_fetch_assoc($result)) { ?>
                             <tr>
                                <td><?php echo $Row["fullname"]; ?></td>
                                <td><?php echo $Row["toda_name"]; ?></td>
                                <td><?php echo $Row["status"]; ?></td> 
                                <td>
                                  <button class="btn-enable px-3 py-1">Enabled</button>
                                  <button class="btn-disable px-3 py-1">Disabled</button>
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

<!-- Create New President -->
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
            <select  name="toda" class="form-control" id="exampleFormControlSelect1" >
              <?php
                  $servername='localhost';
                  $username='root';
                  $password='';
                  $dbname = "cs-db";
                  $conn=mysqli_connect($servername,$username,$password,"$dbname");
                    if(!$conn){
                        die('Could not Connect MySql Server:' .mysql_error());
                      }
                    $sql = "SELECT * FROM toda_tbl";
                    $all_categories = mysqli_query($conn,$sql);
                    while ($category = mysqli_fetch_array($all_categories,MYSQLI_ASSOC)):;?>
                        <option value="<?php echo $category["id"];?>">
                            <?php echo $category["toda_name"];?>
                        </option>
            <?php
                    endwhile;
            ?>
            ?>
          </div>
          <div class="form-group mt-3" style="margin-top: 50px;">
            <i class="bi bi-person-circle mx-2 mb-1"></i>
            <input type="text" name="pressName" class="form-control" id="" placeholder="Full Name" required>
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-telephone-fill mx-2 mb-1"></i>
            <input type="text" class="form-control" name="presNo" id="contactField" name="phone" onkeyup=" return validatephone(this.value);" placeholder="Contact (09)" required>
          </div>
          <div class="form-group mt-3">
            <i class="bi bi-envelope-fill mx-2 mb-1"></i>
            <input type="email" class="form-control" name="presEmail" id="" placeholder="@email.com" required>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" name="insertPres" class="modal-btn-upd">Enter</button>
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

<?php

    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "cs-db";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }


    if(isset($_POST['insertPres'])){
        $todaname = $_POST['toda'];
        $presname = $_POST['pressName'];
        $presno   = $_POST['presNo'];
        $presemail    = $_POST['presEmail'];
$query = "INSERT INTO president (fullname, email, contact_no,toda_id,status)
          VALUES ('$presname','$presemail','$presno', '$todaname','active')";
$execute = mysqli_query($conn, $query);
if($execute=== true){
  $msg= "Data was inserted successfully";
}else{
  $msg= mysqli_error($conn);
}
echo "<script> alert($msg); </script>";
}

?>