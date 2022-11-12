<?php
session_start();

include dirname(__FILE__).'/../../includes/db_conn.php';
$db = new db_conn;

define('SITE_URL',' http://localhost/cs/traysi-complain-system/');

function base_url($slug)
{
    echo SITE_URL.$slug;
}

function validateInput($dbconn, $input)
{
    return mysqli_real_escape_string($dbconn, $input);
}

function redirect($message, $page)
{
    $redirectTo = SITE_URL.$page;
    $_SESSION['message'] = "$message";
    header("location: $redirectTo ");
    exit(0);

}

?>
