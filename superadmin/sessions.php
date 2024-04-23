<?php
session_start();

include('../dbconfig/dbcon.php');

if(!$_SESSION['uid'])
{
    header('Location: login.php');
}

?>
