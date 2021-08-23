<?php
session_start();

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['stu_reg']);
    header('Location:mainpage.html');
}
?>