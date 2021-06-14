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
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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

.dropdown:hover .dropdown-content{
  display: block;
}
.card4{
  position: relative;
  left: 450px;
  top:-50px;
  font-size: 18px;
  color:#FFD700;
}
.error{
  text-align: center;
}
.errorimage{
  width: 700px;
  height: 400px;
  position: relative;
  right: -300px;
  top:5px;
}
.card1 span{
  font-size: 40px;
  position: relative;
}
.card1 p{
  margin: -22px;
  position: relative;
  left: 550px;
  font-weight: bold;
  top: -50px;
  font-size: 18px;
}

::-webkit-scrollbar {
width: 0px; /* remove scrollbar space /
background: transparent; / optional: just make scrollbar invisible */
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #9fa3b1;
}
body{
  color: black;
   background-image: url("https://www.wallpapertip.com/wmimgs/248-2484357_wallpaper-books-library-arrangment.jpg");
   background-repeat: no-repeat;
  background-size: 100% 100%;
  overflow-x:hidden ;
}

.card2 button{
    position: relative;
    margin: 8px;
    top:4px;
    right: 20px;
    height: 20px;
    width: 95px;
    border-radius: 5px;
    color: white;
    border: none;
    background-color: #04AA6D;
    font-size: 16px;
    cursor: pointer;
    padding: 14px 28px;
  
}
.card2 button:hover
{
    background-color: red;
}
.card2 p{
    top: -10px;
    right: 10px;
    position: relative;
    font-weight: bold;
}
.card3{
    margin-top: 10px;
    border: 3px solid #fff;
    height: 100px;
    margin-left: 50px;
    background-color: rgb(46, 31, 26);
    width: 90%;
    border-radius: 25px;
    display: flex; 
    justify-content: space-around; 
    box-shadow: 10px 10px 5px #aaaaaa;
}
.card1{
    background-color:rgb(46, 31, 26);
    width: 80%;
    float: left;
    height: 80px;
    color: #FFD700;
    margin-left:30px;
    font-size: 15px;
    font-weight: bold;

}

.card2{
    background-color: #594f8d;
    width: 5%;
    float: left;
    height: 80px;
    color: #fff;
    
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
  border-bottom: 1px solid  #FFD700;
  border-bottom: 1px solid  #FFD700;
  border-top: 1px solid  #FFD700;
}    

.wrapper .sidebar ul li a{
  color:  #FFD700;
  display: block;
  text-decoration: none;
}

.wrapper .sidebar ul li button{
  color:#bdb8d7;
  display: block;
  border: none;
 
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #FFD700;
}
   
.wrapper .sidebar ul li:hover a{
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

@media (max-height: 500px){
  .social_media{
    display: none !important;
  }
}

    </style>
  <body style="background-size:cover;">
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
                <?php
                        $con=mysqli_connect('localhost','root',"","library");
                        if(!$con)
                        {
                          echo "db not connected";
                        }
                        $s="select * from student where status='No'";  
                        $query=mysqli_query($con,$s);

                        
                        if(mysqli_num_rows($query) == 0)
                        {?>
                          <h1 class="error">Currently no requests!!!</h1>
                          <img class="errorimage" src="error.png" alt="error">
                        <?php
                        }
                        ?>
                        <?php
                        while($row=mysqli_fetch_assoc($query))
                        {
                        ?>
                          <div class="card3">
                            <div class="card1">
                            <br>
                            <span>
                              <?php echo $row['stu_name']?>
                            </span>
                            <br>
                            <div class="card4">
                                <?php echo $row['stu_regno']?>
                                
                                <br>
                              
                                <?php echo $row['stu_email']?>
                            </div>
                           
                            </div>
                            <div class="card2">
                            <form action="request.php" style="background-color:rgb(46, 31, 26);color:#FFD700;"method="post">
                              <button name='app' type="submit" value="<?php echo $row['stu_regno']?>"><p>Approve</p></button>
                              <button name='dis' type="submit" value="<?php echo $row['stu_regno']?>"><p>Disapprove<p></button>
                            </form>
                            </div>
                          </div>
    
                        <?php
                        }
                    ?>
                     <?php

                        if(isset($_POST['app']))
                        {
                            $query=$_POST['app'];
                            $s="update student set status='YES' where stu_regno='$query'";
                            $res=mysqli_query($con,$s);
                            echo '<script>window.location.href="request.php"</script>';
                        }
                        if(isset($_POST['dis']))
                        {
                            $query=$_POST['dis'];
                            $s="update student set status='disapproved' where stu_regno='$query'";
                            $res=mysqli_query($con,$s);
                            echo '<script>window.location.href="request.php"</script>';
                        }
                        ?>

           
        </div>
    
</body>
</html>
