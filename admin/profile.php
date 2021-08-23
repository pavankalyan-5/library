<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
   $(document).ready(function(){

  
  $('#eye1').click(function(){
       
        if($(this).hasClass('fa-eye-slash')){
           
          $(this).removeClass('fa-eye-slash');
          
          $(this).addClass('fa-eye');
          
          $('#curpass').attr('type','text');
            
        }else{
         
          $(this).removeClass('fa-eye');
          
          $(this).addClass('fa-eye-slash');  
          
          $('#curpass').attr('type','password');
        }
      
    });

    $('#eye2').click(function(){
       
       if($(this).hasClass('fa-eye-slash')){
          
         $(this).removeClass('fa-eye-slash');
         
         $(this).addClass('fa-eye');
         
         $('#newpass').attr('type','text');
           
       }else{
        
         $(this).removeClass('fa-eye');
         
         $(this).addClass('fa-eye-slash');  
         
         $('#newpass').attr('type','password');
       }
     
   });
});
    </script>

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
  color: #FFD700;
}


.profile{
  width: 25px;
  height: 25px;
  border-radius: 30px;
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
  left: 100px;
  background-color: rgb(46, 31, 26);
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
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
.dropdown-content:hover .fa {
  background-color: #FFD700;
  color: black;
}
.dropdown-content:hover .fas{
  background-color: #FFD700;
  color: black;
}

.dropdown:hover .dropdown-content{
  display: block;
}
body{
   background-color: #f3f5f9;
   background-image: url("https://www.wallpapertip.com/wmimgs/248-2484357_wallpaper-books-library-arrangment.jpg");
   
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
  background-color:#FFD700;
  color: black;
}
.wrapper .sidebar ul li:hover .fa{
  background-color:#FFD700;
  color: black;
}
.wrapper .sidebar ul li:hover .fas{
  background-color:#FFD700;
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
  color: #bdb8d7;
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
  border-bottom: 1px solid #FFD700;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}

@media (max-height: 500px){
  .social_media{
    display: none !important;
  }
}

#change-bnt{
  position: relative;
  right: -30px;
}

#edit-bnt{
  position: relative;
  right: -10px;
}
.btn-info:focus{
  outline: none;
  border: none;
}
.wrapper1{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 450px;
  display: flex;
  box-shadow: 0 1px 20px 0 rgba(69,90,100,.08);
  margin-top: 300px;
}

.wrapper1 .left{
  width: 35%;
  background: rgba(46, 31, 26);
  padding: 30px 25px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  text-align: center;
  color: #FFD700;

}

.wrapper1 .left img{
  border-radius: 5px;
  margin-bottom: 10px;
}

.wrapper1 .left h4{
  margin-bottom: 10px;

}

.wrapper1 .left p{
  font-size: 12px;
}


.wrapper1 .right{
  width: 65%;
  background: rgb(46, 31, 26,0.8);
  padding: 30px 25px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

.wrapper1 .right .info,
.wrapper1 .right .projects{
  margin-bottom: 25px;
}

.wrapper1 .right .info h3,
.wrapper1 .right .projects h3{
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom: 1px solid #FFD700;
    color: #FFD700;
  text-transform: uppercase;
  letter-spacing: 5px;
}

.wrapper1 .right .info_data,
.wrapper1 .right .projects_data{
  display: flex;
  justify-content: space-between;
}

.wrapper1 .right .info_data .data,
.wrapper1 .right .projects_data .data{
  width: 45%;
}

.wrapper1 .right .info_data .data h4,
.wrapper1 .right .projects_data .data h4{
    color: #FFD700;
    margin-bottom: 5px;
}

.wrapper1 .right .info_data .data p,
.wrapper1 .right .projects_data .data p{
  font-size: 13px;
  margin-bottom: 10px;
  color: #FFD700;
}
.cancel{
  position: relative;
  right: 85px;
  top:35px
}
em{
  color: black;
}
    </style>
  <body style="background-size:cover;background-repeat:no-repeat; background-attachment:fixed;">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    
    
    <div class="wrapper">
        <div class="sidebar">
        <img src="icon.png" alt="" width="50px" height="50px" style="margin-left: 75px; margin-top:-20px;margin-bottom:10px;border:1px solid #ffd700;border-radius:10px; background-color:#ffd700;">
            <form action="home.php" method="post">
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
                <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
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
                      <span aria-hidden="true" style="color:black;">×</span>
                    </button>
                </div>
                <div class="modal-body" style="color:black;">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-warning cancel" type="button" data-dismiss="modal">Cancel</button>
              <form action="logout.php" method="POST"> 
                <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
              </form>
            </div>
              </div>
          </div>
          </div>
            </div>
                
            <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
            <?php
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
     <?php
        if(isset($_SESSION['status']) && $_SESSION['status']!='')
        {
          echo '<p>'.$_SESSION['status'].'</p>';
          unset($_SESSION['status']);
        }
        if(isset($_SESSION['status1']) && $_SESSION['status1']!='')
        {
          echo '<p>'.$_SESSION['status1'].'</p>';
          unset($_SESSION['status1']);
        }
     ?>
      <div class="wrapper1">
        <div class="left">
          <img src= "uploads/<?=$row['image']?>"alt="user" width="100px" height="100px">
          <h4><?php  echo $_SESSION['adminreg']?></h4>
      </div>
    
   
      <div class="right">
          <div class="info">
              <h3>about</h3>
              <div class="info_data">
                <div class="data">
                      <h4>Name:</h4>
                        <p><?php  echo $row['admin_name']?></p>
                      <h4>Email:</h4>
                        <p><?php  echo $row['admin_email']?></p>
                </div>
              </div>
          </div>
          <button type="button" style="position:relative;top:10px;"id="edit-bnt" class="btn btn-warning" data-toggle="modal" data-target="#edit"> Edit </button>
          <button type="button" style="position:relative;top:10px;" id ="change-bnt" class="btn btn-warning" data-toggle="modal" data-target="#change"> Change Password </button>
      </div>
  </div>
     <!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color: black;" id="exampleModalLabel">Edit Profile</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="profile.php" onsubmit="return validateImage();"name="update" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="form-group">
              <label class="form-label" style="color: black;">Name</label>
              <input type="text" class="form-control" name='user' id="user" value="<?php  echo $row['admin_name']?>" placeholder="enter name" >
            </div>my
            <div class="form-group">
              <label class="form-label" style="color: black;">Email</label>
              <input type="email" class="form-control" name='email' id="email" value="<?php  echo $row['admin_email']?>" placeholder="enter email" >
            </div>
            <div class="form-group">
              <label class="form-label" style="color: black;">Picture</label>
              <input type="file" name="my_image" id="my_image" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          <button type="submit" id="save" name="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
        
      
    </div>
  </div>
</div>
     <!-- Modal -->
     <div class="modal fade" id="change" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color: black;" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form name='change' action="" method="POST">
        <div class="modal-body">
            <div class="form-group">
              <label class="form-label" style="color: black;">Current Password:</label>
              <em style="cursor:pointer; position:relative;left:75%;top:30px;"class="fas fa-eye-slash" id="eye1"></em>
              <input type="password" class="form-control" name='curpass' id="curpass"  pattern="<?php echo $v?>" placeholder="enter Current Password" required>
              <p id="cur"></p>
            </div>
            <div class="form-group">
              
              <label class="form-label" style="color: black;">New Password:</label>
              <em style="cursor:pointer; position:relative;left:78%;top:30px;"class="fas fa-eye-slash" id="eye2"></em>
              <input type="password" class="form-control" name='newpass'  id="newpass" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" placeholder="enter New Password" required>
            </div>                                                                   
            <div class="form-group">
              <label class="form-label" style="color: black;">Re-Enter New Password:</label>
              <input type="password" class="form-control" name='connewpass' id="connewpass" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" placeholder="Re-Enter New Password" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          <form action="profile.php" method="POST">
            <button type="submit" name="changebnt" class="btn btn-primary">Save changes</button>
          </form>
          <?php
            if(isset($_POST['changebnt']))
            {
              $before=$row['admin_reg'];
              $bef_pass=$row['admin_pass'];
              $new_cur=$_POST['curpass'];
              $new_pass=$_POST['newpass'];
              $connew_pass=$_POST['connewpass'];
              $query="update admin set admin_pass='$new_pass' where admin_reg= '$before'";
              $res=mysqli_query($con,$query);
              $_SESSION['status1']='<div style="background-color:green; color-white; margin-left:20%; width:50%;" class="alert alert-success alert-dismissible">  <a href="#" style="color:black;" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong style=color:white;>Success!Password updated Sucessfully.</strong></div>';
              echo '<script>window.location.href="profile.php"</script>';
              
            }
          ?>
             <script>
                  var phone_input = document.getElementById("curpass");
                  phone_input.addEventListener('input', () => {
                  phone_input.setCustomValidity('');
                  phone_input.checkValidity();
                  });

                  phone_input.addEventListener('invalid', () => {
                  if(phone_input.value === '') {
                  phone_input.setCustomValidity('Enter Current Password!');
                  } else {
                  phone_input.setCustomValidity('Incorrect  Password');
                  }
            });
            var pass=document.getElementById('newpass');
                pass.addEventListener('input',() =>{
                    pass.setCustomValidity('');
                    pass.checkValidity();
                }
                );
                pass.addEventListener('invalid', () => {
                if(pass.value === '') {
                pass.setCustomValidity('Enter New password!');
                } else {
                pass.setCustomValidity('should contain 1 upper,1lowercase ,numerical,1special char');
                }
                });
                var pass1=document.getElementById('connewpass');
                pass1.addEventListener('input',() =>{
                    pass1.setCustomValidity('');
                    pass1.checkValidity();
                }
                );
                pass1.addEventListener('invalid', () => {
                if(pass1.value === '') {
                pass1.setCustomValidity('Re-Enter New Password!');
                } 
                else if(pass.value!=pass1.value){
                pass1.setCustomValidity('Password and Confirm password shoul be same');
                }
                });
            </script>


        </div>
      </form>
    </div>
  </div>
</div>
</div> 
</body>
<script>
   
   $('form').on('submit', function (e) {
       var focusSet = false;
       if (!$('#user').val()) {
           if ($("#user").parent().next(".validation").length == 0) // only add if not added
           {
             $("#user").parent().after('<div class="alert alert-danger alert-dismissible">  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong style=color:red;>Warning!</strong>Enter Username.</div>');
           }
           e.preventDefault(); // prevent form from POST to server
           $('#user').focus();
           focusSet = true;
           return;
       } 
       else {
           $("#user").parent().next(".validation").remove(); // remove it
       }
       if (!$('#email').val()) {
           if ($("#email").parent().next(".validation").length == 0) // only add if not added
           {
             $("#email").parent().after('<div class="alert alert-danger alert-dismissible">  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong style=color:red;>Warning!</strong>Enter email.</div>');
           }
           e.preventDefault(); // prevent form from POST to server
           $('#email').focus();
           focusSet = true;
           return;
       } 
       else {
           $("#email").parent().next(".validation").remove(); // remove it
       }
      
      
   });
    
function validateImage() {
    var formData = new FormData();
    var file = document.getElementById("my_image").files[0];
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png") {
      $("#my_image").parent().after('<div class="alert alert-danger alert-dismissible">  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong style=color:red;>Warning!</strong> On1ly jpeg , png and jpg are allowed.</div>');
        document.getElementById("my_image").value = '';
        return false;
    }
    if (file.size > 1024000) {
      $("#my_image").parent().after('<div class="alert alert-danger alert-dismissible">  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong style=color:red;>Warning!</strong1> Image size should be less than 1MB.</div>');
        document.getElementById("my_image").value = '';
        return false;
    }
    return true;
}


</script>
</html>

<?php
            $before=$row['admin_reg'];
            if(isset($_POST['submit']))
            {
              $_SESSION['status']='<div style="background-color:green; color-white; margin-left:20%; width:50%;" class="alert alert-success alert-dismissible">  <a href="#" style="color:black;" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong style=color:white;>Success!Profile updated Sucessfully.</strong></div>';
              $modified_name=$_POST['user'];
              $_SESSION['adminname']=$modified_name;
              $modified_email=$_POST['email'];
              $query="update admin set admin_name='$modified_name', admin_email='$modified_email' where admin_reg= '$before'";
              $res=mysqli_query($con,$query);
              echo '<script>window.location.href="profile.php"</script>';
            }
            if(isset($_FILES['my_image']))
            { 
              $img_name = $_FILES['my_image']['name'];
              $img_size = $_FILES['my_image']['size'];
              $tmp_name = $_FILES['my_image']['tmp_name'];
              $error = $_FILES['my_image']['error'];

              if ($error == 0) {
                if ($img_size > 1024000) {
                  $em = "Sorry, your file is too large.";
                }
                else {
                  $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                  $img_ex_lc = strtolower($img_ex);

                  $allowed_exs = array("jpg", "jpeg", "png"); 

                  if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = 'uploads/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
                    $user=$_SESSION['adminreg'];
                    $query="update admin set image='$new_img_name' where admin_reg= '$user'";
                    mysqli_query($con, $query);
                   
                  }
                  else {
                    $em = "You can't upload files of this type";
                      
                  }
                }
              }
              else
              {
                $em = "Sorry, your file is too large.";
            
              }
            }           
          ?>