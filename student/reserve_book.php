<?php
session_start();
$con=mysqli_connect('localhost','root',"","library");
if (isset($_POST['bookb']))
{
  $y=$_POST['bookb'];
  $n=$_SESSION['stu_reg'];
  $d1=date('Y-m-d');
  $t=strtotime($d1);
  $d2=date("Y-m-d",$t);
  $tr=0;
  for ($i=$d1;$tr<10;$i++)
 {
    $t=strtotime($i);
    $d2=date('Y-m-d',$t);
    $tr++;

  }
  $s="select * from book where book_id='$y'";
  $qu2=mysqli_query($con,$s);

 
  $row=mysqli_fetch_assoc($qu2);
  $s1="select * from login where regno='$n'";
  $qu3=mysqli_query($con,$s1);
  
 
  $row1=mysqli_fetch_assoc($qu3);
  if($row1['btaken']<3)
  {
  
  $qu="insert into transactions values('$y','$n','$d1','$d2',0,'requested')";
  
  
  
  $qu1=mysqli_query($con,$qu);
  
  $count=$row1['btaken']+1;
  $c=$row['copies']-1;
  $qu="update book set copies=$c where book_id='$y'";
  $qu2=mysqli_query($con,$qu);
  $qu="update login set btaken=$count where regno='$n'";
  $qu2=mysqli_query($con,$qu);
  unset($_POST['bookb']);
  unset($qu);
}
}
else
{
echo "<script>alert('cant allocate book')</script>";
}
header("Location: " . $_SERVER["HTTP_REFERER"]);
?>
               