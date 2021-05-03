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

body{
   background-color: #f3f5f9;
}


.wrapper{
  display: flex;
  position: relative;
}


.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: #4b4276;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li button{
  color: #bdb8d7;
  
  display: block;
  border: none;
 
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color:red;
}
   
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
.wrapper .sidebar ul li button:hover {
  cursor:pointer;
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
  background: #594f8d;
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
  background: #fff;
  color: #717171;
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
  background: linear-gradient(to right,#01a9ac,#01dbdf);
  padding: 30px 25px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  text-align: center;
  color: #fff;
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
  background: #fff;
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
    border-bottom: 1px solid #e0e0e0;
    color: #353c4e;
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
    color: #353c4e;
    margin-bottom: 5px;
}

.wrapper1 .right .info_data .data p,
.wrapper1 .right .projects_data .data p{
  font-size: 13px;
  margin-bottom: 10px;
  color: #919aa3;
}


    </style>
  <body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    
    <div class="wrapper">
        <div class="sidebar">
            <h2>Sidebar</h2>
            <form action="home.php" method="post">
            <ul>
            <li><a href="studentpage1.php"><i style="padding-right:10px;"class="fas fa-home"></i>Home</a</li>
            <li><a href="profile.php"><i style="padding-right:10px;"class="fas fa-user"></i>Profile</a></li>
            <li><a href="about.php"><i style="padding-right:10px;"class="fas fa-address-card"></i>About</a></li>
            <li><a href="search.php"><i style="padding-right:10px;" class="fas fa fa-search"></i>Search</a></li>

            <li><a href="fine.php"><i style="padding-right:10px;"class="fas fa fa-money"></i>Fine</a></li>
            <li><a href="request.php"><i style="padding-right:10px;"class="fas fa-address-book"></i>Request</a></li>
            </ul>
            </form>

            <div class="social_media">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="main_content">
            <div class="header">Welcome!! Have a nice day.</div>  
            <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper1">
    <div class="left">
        <img src="https://i.pinimg.com/564x/d9/56/9b/d9569bbed4393e2ceb1af7ba64fdf86a.jpg" alt="user" width="100">
        <h4><?php  echo $_SESSION['stu_name']?></h4>
         <p><?php  echo $_SESSION['stu_reg']?></p>
    </div>
    <?php
    $con=mysqli_connect('localhost','root','','library');
    if(!$con)
    {
        echo "problem in connecting database";
    }
    $reg=$_SESSION['stu_reg'];
    $s="select * from login where regno='$reg'";
    $qu=mysqli_query($con,$s);
    $row=mysqli_fetch_assoc($qu);

    ?>
    <div class="right">
        <div class="info">
            <h3>about</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p><?php  echo $row['email']?></p>
                 
                   <h4>Fine</h4>
                    <p><?php  echo $row['fine']?></p>
                    <h4>Branch</h4>
                    <p>
                        <?php  
                            $s=substr($row['regno'],7,2);
                            if ($s=='10')
                            echo "CSE";
                            else if($s=='12')
                            echo "ECE";
                        ?>
                    </p>
                    <h4>Year</h4>
                    <p>
                        <?php  
                            $s=strrev(substr($row['regno'],2,2));
                            $y=date('y');
                            $s=(int)($y)-(int)($s);
                            echo $s;
                        ?>
                    </p>
              </div>
            </div>
        </div>
      
      
      
    </div>
</div>
        </div>

    
</body>
</html>