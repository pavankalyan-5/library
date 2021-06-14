<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  
  <style>
    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

    

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}


.profile{
  width: 25px;
  height: 25px;
  border-radius: 30px;
}
.btn-warning{
  position: relative;
  right: 85px;
  top:35px
}

.dropdown {
  float: right;
  position: relative;
  top: -10px;
  right:50px;
 
}

.dropbtn{
  position: relative;
  top: -10px;
}

.dropdown .dropbtn {
  font-size: 30px;  
  border: none;
  outline: none;
  color: black;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover{
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  left:100px;
  background-color: rgb(46, 31, 26);
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 3;
}

.dropdown-content a {
  float: none;
  color: #FFD700;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #FFD700;
  color: black;
}

.dropdown:hover .dropdown-content{
  display: block;
}

body{
  color: black;
   background-image: url("https://www.wallpapertip.com/wmimgs/248-2484357_wallpaper-books-library-arrangment.jpg");
   background-image: linear-gradient(rgba(0,0,0,10.5));
   background-repeat: no-repeat;
  background-size: 100% 120%;
}

.wrapper{
  display: flex;
  position: relative;
  
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: rgb(46, 31, 26);
  padding: 30px 0px;
  position: fixed;
  border-right: 2px solid #FFD700;
}

.wrapper .sidebar h2{
  color: #FFD700;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #FFD700;
  border-bottom: 1px solid #FFD700;
  border-top: 1px solid #FFD700;
}    

.wrapper .sidebar ul li a{
  color: #FFD700;
  display: block;
  text-decoration: none;
}

.wrapper .sidebar ul li button{
  color: #FFD700; 
  display: block;
  border: none;
 
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color:#FFD700;
  color: black;
}
   
.wrapper .sidebar ul li:hover a{
  text-decoration: none;
  color: black;
}
.wrapper .sidebar ul li button:hover {
  cursor:pointer;
  color: black;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
  display: block;
  width: 40px;
  background: rgb(46, 31, 26);
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #FFD700;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  height: 50px;
  background: rgb(46, 31, 26);
  color: #FFD700;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}
button
{
  background:green;
  border: none;
}
@media (max-height: 500px){
  .social_media{
    display: none !important;
  }
}
#add form
{
  margin-top:100px;
  margin-left: 30%;
}
#add h1{
  align-items: center;
  transform: translate(90px);
  height: 50px;
}

#add label{
  width: 120px;
  display: inline-block;
  height: 50px;
  font-size: 20px;
}

#delete form
{
  margin-top:100px;
  margin-left: 30%;
}
#delete h1{
  align-items: center;
  transform: translate(90px);
  height: 50px;
}

#delete label{
  width: 120px;
  display: inline-block;
  height: 50px;
  font-size: 20px;
}

.add{
  margin-left: 12%;
  width: 1000px;
  padding: 20px;
  height: 600px;
  background-color: rgba(46, 31, 26,0.8);
  border-radius: 20px ;
  color: #FFD700;
  margin-top: 5%;
  
}

.add h2{
  margin-left: 40%;
  position: relative;
  top: 2px;
}

.card{
  margin-top:20px;
}


.card1{
  margin-left:8%;
}
.card2{
  margin-left: 20%;
}
#uname{
  height: 20px;
  width: 250px;
}

#submit{
  transform: translate(100px);
  padding: 8px 30px;
}
.form-group{
  margin-left: 20%;
}

.form-group input{
  padding: 12px 20px;
  font-size: 14px;
}
.btn{
  margin-left: 45%;
}

.card{
  display: flex;
}
.alert{
  width: 20%;
  margin-left: 78%;
  height: 40px;
  position: relative;
  top: -550px;
}
.close{
  color: white;
}

.error{
  color: white;
  background-color: red;
}

input[type = file]{
  background:transparent;
  color: white;
  border: none;
}
   </style>
  <body style="background-size:cover;">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="sidebar">
    <img src="icon.png" alt="" width="50px" height="50px" style="margin-left: 75px; margin-top:-20px;margin-bottom:10px;border:1px solid #ffd700;border-radius:10px; background-color:#ffd700;">
        <form action="deletebook.php" method="post">
        <ul>
            <li><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="addbook.php"><i style="padding-right:10px;" class="fas fa fa-plus"></i>Add Book</a></li>
            <li><a href="deletebook.php"><i style="padding-right:10px;" class="fas fa fa-minus"></i>Delete Book</a></li>
            <li><a href="details.php"><i class="fas fa fa-info"></i>Details</a></li>
            <li><a href="request.php"><i class="fas fa-address-book"></i>Request</a></li>
        </ul>
</form>
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">
        <div class="dropdown">
                <button class="dropbtn">
                  <?php
                   echo"<span style='color:#FFD700'> $_SESSION[adminname] </span>";
                   $con=mysqli_connect('localhost','root','','library');
                   if(!$con)
                   {
                     echo "problem in connecting database";
                   }
                   $reg=$_SESSION['adminreg'];
                   $s="select * from admin where admin_reg='$reg'";
                   $qu=mysqli_query($con,$s);
                   $row=mysqli_fetch_assoc($qu);
                   $v=$row['admin_pass'];
                  ?>
                  <img src= "uploads/<?=$row['image']?>" class="profile" id="pic">
                </button>
              <div class="dropdown-content">
                <a href="profile.php">
                <i class="fa fa-user" aria-hidden="true"></i>
                  Profile
                </a>
                <a href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt"></i>
                  Logout
                </a>
              </div>
            </div> 
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="color:black;" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="color:black;">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-warning" type="button" data-dismiss="modal">Cancel</button>
              <form action="logout.php" method="POST"> 
                <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
              </form>
            </div>
              </div>
          </div>
          </div> 
        </div>  
        <div class="info">
          <div id="content" style="display: block;">
          <div class="add effect2">
                <h2>ADD BOOK</h2>
              <form name="add" action="addbook.php" onsubmit="return validatebook();" method="post" enctype="multipart/form-data">
              <div class="card">
              <div class="card1">
                  <div class="form-group" style="width: 100%;">
                    <label for="uname">Book Id</label>
                    <input type="text" class="form-control" id="bid" name="book_id" style="width: 250px; height:25px">
                  </div>
                  <br>
                
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" style="width: 250px; height:25px">    
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="edition">Edition</label>
                    <input type="text" class="form-control" id="edition" name="edition" style="width: 250px; height:25px">
                  </div>
                  <br>
                  <div class="form-group">
                    <label class="form-label">File</label>
                    <input type="file" style="width: 250px; height:45px;" name="book_pdf" id="book_pdf" class="form-control">
                  </div>
              </div>
              <div class="card2">
                  <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" style="width: 250px; height:25px">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="publisher">Publisher</label>
                    <input type="text" class="form-control" id="publisher" name="publisher" style="width: 250px; height:25px">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="copies">Copies</label>
                    <input type="text" class="form-control" id="copies" name="copies" style="width: 250px; height:25px">
                  </div>
                  <br>
                  <div class="form-group">
                    <label class="form-label">Book Cover pic</label>
                    <input type="file" style="width: 250px; height:45px;" name="book_cover" id="book_cover" class="form-control">
                  </div>
              </div>
              </div>
              <button type="submit" class="btn btn-success" name="submit">Add Book</button>
            </form>
          </div>
          </div>
        </div>
    </div>
</div>
<script>
   
    $('form').on('submit', function (e) {
        var focusSet = false;
        if (!$('#bid').val()) {
            if ($("#bid").siblings().next(".validation").length == 0) // only add if not added
            {
              $("#bid").siblings().after("<span class='validation' style='border-radius: 5px;color:white; background-color:red;position:relative; padding:5px; top:60px; left:-5px;'>Please enter book id</span>");
            }
            e.preventDefault(); // prevent form from POST to server
            $('#bid').focus();
           
            focusSet = true;
            return;
        } 
        else {
            $("#bid").siblings().next(".validation").remove(); // remove it
        }
        if(!$("#bid").val().match(/^[0-9]+$/)){
          $("#bid").siblings().after("<span class='validation' style='border-radius: 5px;color:white; background-color:red;position:relative; padding:5px; top:60px; left:-5px;'>Book id should be Numerical</span>");
              e.preventDefault(); // prevent form from POST to server
            $('#bid').focus();
            focusSet = true;
            return;
            }
           
        else {
            $("#bid").siblings().next(".validation").remove(); // remove it
        }

        if (!$('#title').val()) {
            if ($("#title").siblings().next(".validation").length == 0) // only add if not added
            {
                $("#title").siblings().after("<span class='validation' style='border-radius: 5px;color:white; background-color:red;position:relative; padding:5px; top:60px; left:-5px;'>Please enter title</span>");
            }
            e.preventDefault(); // prevent form from POST to server
            $('#title').focus();
            focusSet = true;
            return;
        } 
        else {
            $("#title").siblings().next(".validation").remove(); // remove it
        }
        if (!$('#edition').val()) {
            if ($("#edition").siblings().next(".validation").length == 0) // only add if not added
            {
                $("#edition").siblings().after("<span class='validation' style='border-radius: 5px;color:white; background-color:red;position:relative; padding:5px; top:60px; left:-5px;'>Please enter Edition</span>");
            }
            e.preventDefault(); // prevent form from POST to server
            $('#edition').focus();
            focusSet = true;
            return;
        } 
        else {
            $("#edition").siblings().next(".validation").remove(); // remove it
        }

        if(!$('#author').val()) {
            if ($("#author").siblings().next(".validation").length == 0) // only add if not added
            {
                $("#author").siblings().after("<span class='validation' style='border-radius: 5px;color:white; background-color:red;position:relative; padding:5px; top:60px; left:-5px;'>Please enter Edition</span>");
            }
            e.preventDefault(); // prevent form from POST to server
            $('#author').focus();
            focusSet = true;
            return;
        } 
        else {
            $("#author").siblings().next(".validation").remove(); // remove it
        }

        if(!$('#publisher').val()) {
            if ($("#publisher").siblings().next(".validation").length == 0) // only add if not added
            {
                $("#publisher").siblings().after("<span class='validation' style='border-radius: 5px;color:white; background-color:red;position:relative; padding:5px; top:60px; left:-5px;'>Please enter Publisher</span>");
            }
            e.preventDefault(); // prevent form from POST to server
            $('#publisher').focus();
            focusSet = true;
            return;
        } 
        else {
            $("#publisher").siblings().next(".validation").remove(); // remove it
        }

        if(!$('#copies').val()) {
            if ($("#copies").siblings().next(".validation").length == 0) // only add if not added
            {
                $("#copies").siblings().after("<span class='validation' style='border-radius: 5px;color:white; background-color:red;position:relative; padding:5px; top:60px; left:-5px;'>Please enter Copies</span>");
            }
            e.preventDefault(); // prevent form from POST to server
            $('#copies').focus();
            focusSet = true;
            return;
        } 
        else {
            $("#copies").siblings().next(".validation").remove(); // remove it
        }
        if(!$("#copies").val().match(/^[0-9]+$/)){
              $("#copies").siblings().after("<span class='validation' style='border-radius: 5px;color:white; background-color:red;position:relative; padding:5px; top:60px; left:-5px;'>Copies should be Numerical</span>");
              e.preventDefault(); // prevent form from POST to server
            $('#copies').focus();
            focusSet = true;
            return;
            }
           
        else {
            $("#copies").siblings().next(".validation").remove(); // remove it
        } 

        var ext = $('#book_pdf').val().split('.').pop().toLowerCase();
        if($.inArray(ext, ['txt','pdf','doc','docx']) == -1) {
          $("#book_pdf").parent().after("<span class='validation' style='border-radius: 5px;color:white; background-color:red;position:relative; padding:5px; top:-20px; left:50px;'>File should be pdf,doc,docx or txt</span>");
          e.preventDefault(); // prevent form from POST to server
            return;
          }
          else {
            $("#book_pdf").parent().next(".validation").remove(); // remove it
        } 

        ext = $('#book_cover').val().split('.').pop().toLowerCase();
        if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
          $("#book_cover").parent().after("<span class='validation' style='border-radius: 5px;color:white; background-color:red;position:relative; padding:5px; top:-20px; left:50px;'>File should be png,jpeg or jpg</span>");
          e.preventDefault(); // prevent form from POST to server
            return;
          }
          else {
            $("#book_cover").parent().next(".validation").remove(); // remove it
        }
        var file_size = $('#book_pdf')[0].files[0].size;
      
        if(file_size>10240000) { 
          $("#book_pdf").parent().after("<span class='validation' style='border-radius: 5px;color:white; background-color:red;position:relative; padding:5px; top:-20px; left:50px;'>File size should be lessthan 10MB.</span>");
          e.preventDefault(); // prevent form from POST to server
            return;
        }
        else {
            $("#book_pdf").parent().next(".validation").remove(); // remove it
        }
         file_size = $('#book_cover')[0].files[0].size;
        
        if(file_size>1024000) { 
          $("#book_cover").parent().after("<span class='validation' style='border-radius: 5px;color:white; background-color:red;position:relative; padding:5px; top:-20px; left:50px;'>File size should be lessthan 1MB.</span>");
          e.preventDefault(); // prevent form from POST to server
            return;
        }
        else {
            $("#book_cover").parent().next(".validation").remove(); // remove it
        }
      });
  </script>

  </body>
</html>

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
           <div class="alert alert-danger alert-dismissible" style="background-color:red; margin-top:-100px;">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="color: black;position: relative; top:-2px;">&times;</span>
          </button>
              <strong style="position: relative; top:-2px; color:white;">Warning! Book id already Exists.</strong>
            </div>
            <?php  
            
        }

        else
        {
          $img_name = $_FILES['book_pdf']['name'];
          $img_size = $_FILES['book_pdf']['size'];
          $tmp_name = $_FILES['book_pdf']['tmp_name'];
          $error = $_FILES['book_pdf']['error'];
          $new_img_name;
          $new_cover_name;
          if ($error == 0) {
            if ($img_size > 10240000) {
              $em = "Sorry, your file is too large.";
            }
            else {
              $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
              $img_ex_lc = strtolower($img_ex);

              $allowed = ['pdf', 'txt', 'doc', 'docx'];

              if (in_array($img_ex_lc, $allowed)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'bookuploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
              }
            }
          }
              $coverpic_name = $_FILES['book_cover']['name'];
              $coverpic_size = $_FILES['book_cover']['size'];
              $tmp_name = $_FILES['book_cover']['tmp_name'];
              $error = $_FILES['book_cover']['error'];

              if ($error == 0) {
                if ($coverpic_size > 1024000) {
                  $em = "Sorry, your file is too large.";
                }
                else {
                  $img_ex = pathinfo($coverpic_name, PATHINFO_EXTENSION);
                  $img_ex_lc = strtolower($img_ex);

                  $allowed_exs = array("jpg", "jpeg", "png"); 

                  if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_cover_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = 'bookuploads/'.$new_cover_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
                  }
                }
              }

            $sql="INSERT INTO book VALUES ('$Name','$title','$edition','$author','$publisher','$copies','$remarks','$new_img_name','$new_cover_name')";
          
            if(!mysqli_query($con,$sql))
            {
                echo "not inserted";
            }
            else
            {
              ?>
              <div class="alert alert-success alert-dismissible" style="margin-left:45%; background-color:#03E020; margin-top:-7%">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong style="position: relative; top:-2px; color:white">Sucess! Book inserted Successfully!!.</strong>
              </div>
              <?php
            }
        }
    }

  
?>