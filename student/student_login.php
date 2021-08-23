<?php
$con=mysqli_connect('localhost','root','','library');
if(!$con)
{
    echo "problem in connection";
}
session_start();
$reg_no=$_POST['regno'];
$pass=$_POST['pass'];
$s="select * from login where regno='$reg_no'";
$query=mysqli_query($con,$s);
$c=mysqli_num_rows($query);
$row=mysqli_fetch_assoc($query);
if($c==0)
{
    echo "<script>alert('you are not a user')</script>";
    echo '<script>window.location.href="studentlogin.html"</script>';
}
else
{
    if($row['password']!=$pass)
    {
        echo "<script>alert('Wrong Password')</script>";
    }
    else
    {

    $_SESSION['stu_reg']=$reg_no;
    $_SESSION['stu_name']=$row['name'];
    
    echo '<script>window.location.href="studentpage1.php"</script>';
    }
}
?>