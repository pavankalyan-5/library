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
.card4{
  position: relative;
  left: 450px;
  top:-15px;
  font-size: 18px;
  color:#ffd662ff;
}
.card1 span{
  font-size: 40px;
  position: relative;
  top: 20px;
}
.card1 p{
  margin: -22px;
  position: relative;
  left: 550px;
  font-weight: bold;
  top: -10px;
  font-size: 18px;
}

body{
   background-color: #f3f5f9;
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
    background-color: #594f8d;
    width: 90%;
    border-radius: 25px;
    display: flex; 
    justify-content: space-around; 
    box-shadow: 10px 10px 5px #aaaaaa;
}
.card1{
    background-color:#594f8d;
    width: 80%;
    float: left;
    height: 80px;
    color: #fff;
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

    </style>
  <body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <div class="wrapper">
        <div class="sidebar">
            <h2>Sidebar</h2>
            <form action="home.php" method="post">
            <ul>
                <li><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="profile.php"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="addbook.php"><i style="padding-right:10px;" class="fas fa fa-plus"></i>Add Book</a></li>
                <li><a href="deletebook.php"><i style="padding-right:10px;" class="fas fa fa-minus"></i>Delete Book</a></li>
                <li><a href="#"><i class="fas fa fa-info"></i>Details</a></li>
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
                <div class="header">Welcome!! Have a nice day.</div>
                <?php
                        $con=mysqli_connect('localhost','root',"","library");
                        if(!$con)
                        {
                          echo "db not connected";
                        }
                        $s="select * from login where Status='No'";  
                        $query=mysqli_query($con,$s);
                        while($row=mysqli_fetch_assoc($query))
                        {
                        ?>
                          <div class="card3">
                            <div class="card1">
                            <br>
                            <span>
                              <?php echo $row['Name']?>
                            </span>
                            <br>
                            <div class="card4">
                                <?php echo $row['Regno']?>
                                
                                <br>
                              
                                <?php echo $row['Email']?>
                            </div>
                           
                            </div>
                            <div class="card2">
                            <form action="request.php" method="post">
                              <button name='app' type="submit" value="<?php echo $row['Regno']?>"><p>Approve</p></button>
                              <button name='dis' type="submit" value="<?php echo $row['Regno']?>"><p>Disapprove<p></button>
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
                            $s="update login set Status='YES' where Regno='$query'";
                            $res=mysqli_query($con,$s);
                            echo '<script>window.location.href="request.php"</script>';
                        }
                        if(isset($_POST['dis']))
                        {
                            $query=$_POST['dis'];
                            $s="update login set Status='disapproved' where Regno='$query'";
                            $res=mysqli_query($con,$s);
                            echo '<script>window.location.href="request.php"</script>';
                        }
                        ?>

            </div>
        </div>
    
</body>
</html>
