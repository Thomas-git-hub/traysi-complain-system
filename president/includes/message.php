<?php
if(isset($_SESSION['message']))
{
<<<<<<< HEAD
    echo "<h6 class='alert alert-success d-flex justify-content-center'>".$_SESSION['message']."</h6>";
=======
    echo "<h4>".$_SESSION['message']."</h4>";
>>>>>>> a6dade748ff66cf9d9c972e5a9c3958695fcd0f5
    unset($_SESSION['message']);
}