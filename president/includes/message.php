<?php
if(isset($_SESSION['message']))
{
    echo "<h4>".$_SESSION['message']."</h4>";
    unset($_SESSION['message']);
}