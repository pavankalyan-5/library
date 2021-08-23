<?php
session_start();
$con=mysqli_connect('localhost','root',"","library");
if(!$con)
{
  echo "db not connected";
}

$val=$_POST['action'];

$q="select * from transactions where transid=$val";
$row=mysqli_query($con,$q);
$row=mysqli_fetch_assoc($row);
$q="update transactions set status='accepted' where transid=$val";
    $query="select * from book where book_id='$row[book_id]'";
    $query1="select * from student where stu_regno='$row[stu_id]'";
    $row1=mysqli_query($con,$query);
    $row1=mysqli_fetch_assoc($row1);
    $row2=mysqli_query($con,$query1);
    $row2=mysqli_fetch_assoc($row2);
if($row['status'] == "request"){
    


     $p = $row1['title'];
    $sub="Approval for book request";
    $msg="Reg No       :      $row[stu_id]
    Book Name    :      $p
    Author       :      $row1[author]
    Status       :      Accepted  
With Regards
Admin
E-library
Anil Nerukonda Institute Of Techonology and Sciences.";
    $var=$row2['email'];
    mail($var,$sub,$msg);
}

else if($row['status'] == "accepted"){
    $q="update transactions set status='returned' where transid=$val";
    $k="upadte book set copies=$row1[copies]+1 where book_id = $row[book_id]";
}

    $row=mysqli_query($con,$q);
    echo '<script>window.location.href="details.php"</script>';

?>