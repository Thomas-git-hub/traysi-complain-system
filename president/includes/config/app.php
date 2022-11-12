<?php
session_start();

include_once("db_conn.php");

$db = new db_conn;

define('SITE_URL',' http://localhost/cs/traysi-complain-system/');

function validateInput($dbconn, $input)
{
    return mysqli_real_escape_string($dbconn, $input);
}

function base_url($slug)
{
    echo SITE_URL.$slug;
}

function redirect($message, $page)
{
    $redirectTo = SITE_URL.$page;
    $_SESSION['message'] = "$message";
    header("location: $redirectTo ");
    exit(0);

}

?>
