<?php
        $todaid = $_GET['id'];
        $todaname = $_GET['toda_name'];
        $todafrom   = $_GET['toda_from'];
        $todato    = $_GET['toda_to'];
        $todacolor   = $_GET['toda_color'];
        
        if(isset($_POST['insertData'])){
        
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

?>