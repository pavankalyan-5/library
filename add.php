
<?php
$con=mysqli_connect("localhost","root","","library");
if(!$con)
{
    echo "not connected";
}

	$Name=$_POST['user_name'];
	$title=$_POST['title'];
	$edition=$_POST['edition'];
	$author=$_POST['author'];
	$publisher=$_POST['publisher'];
	$copies=$_POST['copies'];
	$remarks=$_POST['remarks'];

    $query= mysqli_query($con,"select * from book where book_id='$Name'");
    if(mysqli_num_rows($query) > 0)
    {
        echo '<script>alert("Book id already existed");</script>';
    }
    else
    {
        $sql="insert into book values('$Name','$title','$edition','$author','$publisher','$copies','$remarks')";

        if(!mysqli_query($con,$sql))
        {
            echo "not inserted";
        }
        else
        {
            echo '<script>alert("inserted sucessfully");</script>';
        }
    }
?>