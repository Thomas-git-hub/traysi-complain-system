<?php
if(isset($_SESSION['message']))
{
    echo "<h1>".$_SESSION['message']."</h1>";
    unset($_SESSION['message']);
}