
<?php
$con=mysqli_connect("localhost","root","","library");
if(!$con)
{
    echo "not connected";
}

    if(isset($_POST['submit']))
    {
        $Name=$_POST['book_id'];
        $title=$_POST['title'];
        $edition=$_POST['edition'];
        $author=$_POST['author'];
        $publisher=$_POST['publisher'];
        $copies=$_POST['copies'];
        $remarks='avaliable';

        $query= mysqli_query($con,"select * from book where book_id='$Name'");
        if(mysqli_num_rows($query) > 0)
        {
          ?>
           <div class="alert alert-danger alert-dismissible" style="background-color:red;">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="color: black;position: relative; top:-2px;">&times;</span>
          </button>
              <strong style="position: relative; top:-2px; color:white">Warning! Book id already Exists.</strong>
            </div>
            <?php  
            
        }
        else
        {
           $sql=" INSERT INTO `book`(`book_id`, `title`, `edition`, `author`, `publisher`, `copies`, `remarks`) VALUES ('$Name','$title','$edition','$author','$publisher','$copies','$remarks')";
            
            if(!mysqli_query($con,$sql))
            {
                echo "not inserted";
            }
            else
            {
              ?>
              <div class="alert alert-success alert-dismissible" style="margin-left:45%; background-color:#03E020;">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong style="position: relative; top:-2px; color:white">Sucess! Book inserted Successfully!!.</strong>
              </div>
              <?php
            }
        }
    }
    if(isset($_FILES['book_pdf']))
        { 
          $img_name = $_FILES['book_pdf']['name'];
          $img_size = $_FILES['book_pdf']['size'];
          $tmp_name = $_FILES['book_pdf']['tmp_name'];
          $error = $_FILES['book_pdf']['error'];

          if ($error == 0) {
            if ($img_size > 12500000) {
              $em = "Sorry, your file is too large.";
            }
            else {
              $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
              $img_ex_lc = strtolower($img_ex);

              $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];

              if (in_array($img_ex_lc, $allowed)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                $sql="update book set filename='$new_img_name' where book_id='$Name'";
                if(!mysqli_query($con,$sql))
                {
                    echo "not inserted";
                }
              }
            }
          }
        }
        echo '<script>window.location.href="addbook.php"</script>';

  
?>

