<?php
if(isset($_SESSION['message']))
{
    echo "<h6 class='alert alert-success d-flex justify-content-center'>".$_SESSION['message']."</h6>";
    unset($_SESSION['message']);
}