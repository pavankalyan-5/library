<?php
session_start();

if(!$_SESSION['adminreg'] || !$_SESSION['adminname'])
{
    header('Location: adminlogin.php');
}
?>

