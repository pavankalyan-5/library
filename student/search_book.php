<?php
session_start()
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script>
              $(document).ready(function(){
              $(".default_option").click(function(){
               
                $(".dropdown ul").addClass("active");
                
              });

              $(".dropdown ul li").click(function(){
                
                var text = $(this).text();
                if(text == "BOOK NAME")
                  $("#hide").val('title');
                else if(text == "AUTHOR")
                  $("#hide").val('author');
                else
                  $("#hide").val('all');


                $(".default_option").text(text);
                $(".dropdown ul").removeClass("active");
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
  background:rgb(46,31,26);
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
  color:#FFD700;
  display: block;
}

.wrapper .sidebar ul li button{
  color: #FFD700;
  
  display: block;
  border: none;
  border: none; background:transparent;font-size:16px;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color:#FFD700;
}
   
.wrapper .sidebar ul li:hover a{
  color: black;
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
  background:rgb(46,31,26);
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color:#FFD700;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: rgb(46,31,26);
  color:#FFD700;
  border-bottom: 1px solid #e0e4e8;
  position: fixed;
  width: 85%;
  height: 61px;
  z-index: 2;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}
button:hover
{
 
  background-color: #FFD700;
  color: black;
}

@media (max-height: 500px){
  .social_media{
    display: none !important;
  }
}
#search{
  margin-top:200px;
}
#search form
{
 margin-left: 30%;
  
}
#search input
{
  height: 30px;
}
#search form button{
  color: white;
  width: 10%;
  height: 30px;
  border: none;
  border-radius:5px;

}
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
*{
  box-sizing: border-box;
}
.column {
  float: left;
  width: 25%;
  padding: 0 5px;
}
.searchresults:after {
  content: "";
  display: table;
  clear: both;
}
.searchresults
{
  text-align: center;
  padding: 5px;
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
  right:20px;
}

.dropbtn{
  position: relative;
  top: -10px;
  left:-35px;
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
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left: -100px;;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  z-index: 4;
}

.dropdown-content a:hover {
  background-color: #ddd;
}
.wrapper1{
  position: fixed;
  top:8%;  
  z-index: 1;
  width: 100%;
  height: 120px;
  overflow: hidden;
  background-color: rgba(46,31,26,0.6);
}

.wrapper1 .search_box{
  background-color: rgba(46,31,26,0.4);
  position:fixed;
  margin-top:30px;
  left: 40%;
  width: 500px;
  background: #fff;
  border-radius: 5px;
  height: 65px;
  display: flex;
  padding: 10px;
  box-shadow: 0 8px 6px -10px #b3c6ff;
  z-index: 2;
}

.wrapper1 .search_box .dropdown{
  width: 150px;
  border-right: 2px solid #dde2f1;
  color: #9fa3b1;
  position: relative;
  cursor: pointer;
  
}

.wrapper1 .search_box .dropdown .default_option{
  text-transform: uppercase;
  padding: 13px 15px;
  font-size: 14px;
}

.wrapper1 .search_box .dropdown ul{
  position: absolute;
  top: 70px;
  left: -10px;
 
  background: #fff;
  width: 150px;
  border-radius: 5px;
  padding: 20px;
  display: none;
  z-index: 10;
  box-shadow: 8px 8px 6px -10px #b3c6ff;
}

.wrapper1 .search_box .dropdown ul.active{
  display: block;
  z-index: 10;
}

.wrapper1 .search_box .dropdown ul li{
  padding-bottom: 20px;

}

.wrapper1 .search_box .dropdown ul li:last-child{
  padding-bottom: 0;
}

.wrapper1 .search_box .dropdown ul li:hover{
  color: #6f768d;
}

.wrapper1 .search_box .dropdown:before{
  content: "";
  position: absolute;
  top: 18px;
  right: 20px;
  border: 8px solid;
  border-color: #5078ef transparent transparent transparent;
}

.wrapper1 .search_box .search_field{
  width: 350px;
  height: 100%;
  display: inline;
}

.wrapper1 .search_box .search_field .input{
  position: relative;
  left: 155px;
  top: -48px;
  width: 100%;
  height: 100%;
  border: 0px;
  font-size: 16px;
  padding-left: 20px;
  padding-right: 38px;
  color: #6f768d;
}

.wrapper1 .search_box .search_field .fas{
  position: absolute;
  top: 20px;
  right: 8px;
  left: 400px;
  font-size: 22px;
  color: #5078ef;
  cursor: pointer;
}
::-webkit-scrollbar {
width: 0px; /* remove scrollbar space /
background: transparent; / optional: just make scrollbar invisible */
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #9fa3b1;
}
::-moz-placeholder { /* Firefox 19+ */
 color: #9fa3b1;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #9fa3b1;
}
 </style>
  <body style="width: 100%; height:100%; background-image:url('https://www.wallpapertip.com/wmimgs/248-2484357_wallpaper-books-library-arrangment.jpg');background-size:cover;background-repeat:no-repeat;background-attachment:fixed">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    
    
<div class="wrapper">
    <div class="sidebar">
    <img src="1-removebg-preview.png" alt="" width="50px" height="50px" style="margin-left: 75px; margin-top:-20px;margin-bottom:10px;border:1px solid #ffd700;border-radius:10px; background-color:#ffd700;">
        <form action="studentpage1.php" method="post">
        <ul>
        <li><a href="studentpage1.php"><i style="padding-right:10px;"class="fas fa-home"></i>Home</a</li>
            
            
            <li><a href="search.php"><i style="padding-right:10px;" class="fas fa fa-search"></i>Search</a></li>

            <li><a href="fine.php"><i style="padding-right:10px;font-size: 18px;"class="fa fa-rupee"></i>Fine</a></li>
            <li><a href="feedback.php"><i style="padding-right:10px;" class="fas fa-comment-alt" aria-hidden="true"></i>Feedback</a></li>
        </ul>
</form>
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
    <script>
          $(document).ready(function(){
            $('.dropdown img').mouseenter(function(){
              $('.dropdown-content').show();
            })
            $(document).click(function(){
              $('.dropdown-content').hide();
            })
          })
        </script>
        <div class="header">Welcome!! Have a nice day.
        <div class="dropdown" style="top: 2px;">
                <button class="dropbtn" style="display: inline; ">
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
                   $v=$row['password'];
                   ?>
                  
                  <?php
                   echo "<span style='color:#FFD700;font-size:22px;margin-left:40px;'>".$_SESSION['stu_name']."</span>";
                   
                  ?>
                  <img src= "uploads/<?=$row['image']?>" style="margin-left: -5px;" class="profile" id="pic">
                </button>
              <div class="dropdown-content" style="left:250px;background-color:rgb(46,31,26);color:#FFD700">
                <a href="profile.php" style="color: #FFD700;" >
                <i class="fa fa-user" style="color: #FFD700;" aria-hidden="true"></i>
                  Profile
                </a>
                <a href="#" style="color: #FFD700;"data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt"style="color: #FFD700;"></i>
                  Logout
                </a>
              
              </div>
            </div>
        
          <!-- Logout Modal-->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
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
        <div class="wrapper1">
            <div class="search_box">
              <form action="search.php" method="GET">
                  <div class="dropdown" style="left:-220px; top:0px">
                      <div class="default_option" >ALL</div>  
                          <ul>
                              <li>ALL</li>
                              <li>BOOK NAME</li>
                              <li>AUTHOR</li>
                          </ul>
                      </div>
                      
                      <div class="search_field">
                          <input type="text" name="search" class="input" placeholder="Search" style="width:70%;height:100%; ">
                          <div class="hidden">
                              <input type="text" name="hide" value="all" id="hide" style="display:none; width:0%; height:0%;"/>
                          </div>
                          <button name="submit" type="submit"><i class="fas fa-search" ></i></button>
                      </div>
              </form>
          </div>
                  </div>
          <div id="search" >
          <div class="searchresults">
          <?php
              $con=mysqli_connect('localhost','root',"","library");
              if(!$con)
              {
                echo "db not connected";
              }
              
              if(isset($_GET['submit']))
              {
                $b=$_GET['search'];
                $v=$_GET['hide'];
                $s='';
                if($v=='all')
                $s="select * from book";
                else if(!isset($_GET['hide']))
                $s="select * from book";
                else 

                $s="select * from book where $v like '%$b%'";
              }
              else
              {
                $s="select * from book";
              }
              
              $query=mysqli_query($con,$s);
            
              while($row=mysqli_fetch_assoc($query))
              {
              ?>
              <div class="column" style="overflow:hidden;">
                
                  <div class="card" style=" position:relative;margin-top:10px;padding:10px;height:100%;border: 2px solid black;border-radius :10px; background-color:rgba(46,31,26,0.8)">
                  <div class="image" style="border: 2px solid #FFD700; border-radius:3px">
                  <img style="width:200px; height:300px" src="uploads/<?=$row['image']?>">
                  </div>
                    
                    <div class="bdetails" style="border-radius :10px;background-color:rgba(46,31,26,0.1);color: #FFD700; padding:10px">
                      <center>
                        <p><b>Bookid: </b><?php $bi=$row['book_id'];echo $row['book_id'];?></p>
                        
                        <p><b>Title: </b><?php echo $row['title'];?></p>
                       
                        <p><b>Author: </b><?php echo $row['author'];?></p>
                        
                        <p><b>Publisher: </b><?php echo $row['publisher'];?></p>
                       
                        <p><b>Copies: </b><?php echo $row['copies'];?></p>
                        <?php
                        if($row['filename']!='')
                        {
                        ?>
                        <div class="x" style="width:100%;display: inline; ">
                        <button class="btn btn-primary" style='background-color:  rgb(46,31,26);position:flex;; color:#FFD700;border-radius: 5px;width:90px; 
                          border:2px solid #FFD700;'type='button'><a href="uploads/<?php echo $row['filename'];  ?>" style="text-decoration: none; color:white; " target="_blank">View</a></button>
                        <button class="btn btn-primary" style='background-color: rgb(46,31,26); color:#FFD700;border-radius: 5px; width:90px;
                          border:2px solid #FFD700;position:flex;; 'type='button'><a href="uploads/<?php echo $row['filename']; ?>"style="text-decoration: none; color:white" download>Download</a></button>
                        </div>
                        <?php
                        }
                        else
                        {
                        ?>
                          <div style="width:100%;display: inline; ">
                        <button class="btn btn-primary" style='background-color:red;position:flex;; color:white;border-radius: 5px;width:90px; 
                          border:2px solid #FFD700;'type='button' disabled>View</button>
                        <button class="btn btn-primary" style='background-color:red; color:white;border-radius: 5px; width:90px;
                          border:2px solid #FFD700;position:flex;; 'type='button' disabled>Download</button>
                        </div>
                        <?php
                        }
                        ?>
                        <?php
                        if($row['copies']==0)
                        {
                      echo "<button  class='btn btn-danger'style='width: 40%;height: 40px;background-color:red;;border-radius: 5px;border:2px solid #FFD700; color:white; margin-top:10px;' type='button' disabled>Book</button></center>";
                        }else
                        {
                          echo "<center><form action='search1.php' method='post' style='margin-left:-40px'><button class='btn btn-primary'type='submit' style='margin-left:35px; margin-top:10px;background-color: rgb(46,31,26); color:#FFD700;border-radius: 5px;border:2px solid #FFD700;width: 40%;height: 40px;'name='bookb' value='$bi'>Book</button></form> <center>";
                        }
                        
                        ?>
                        
                        
                       
                         
                        
                        
                        
                        
                    </center>

                        </div>

                        
                    </div>
                  </div>
                  
                
                  

              <?php
              }
            
              ?>
              
              <?php
$n=$_SESSION['stu_reg'];
$s1="select * from login where regno='$n'";
$qu3=mysqli_query($con,$s1);


$row1=mysqli_fetch_assoc($qu3);
                        if($row1['btaken']>3)
                        {?>
                            <script>
                              window.alert("Not Allowed");
                            </script>
                        <?php
                        }
                        
                        ?>
               </div>
                
</div>
            
          <script>
            $(document).ready(function(){
              $('.x button').hover(function(){
                $(this).css({background:'#ffd700',color:'black'});
                $(this).find('a').css({color:'black'})
              },function(){
                $(this).css({background:'rgb(46,31,26)',color:'white'});
                $(this).find('a').css({color:'white'})
              })
              $('.bdetails button').hover(function(){
                $(this).css({background:'#ffd700',color:'black'});
                
              },function(){
                $(this).css({background:'rgb(46,31,26)',color:'#ffd700'});
                
              })
            })
          </script>
        </div>
       
    </div>
    </div>
    
    <script>
          $(document).ready(function(){
            $('.dropdown img').hover(function(){
              $('.dropdown-content').show();
            })
            $(document).click(function(){
              $('.dropdown-content').hide();
            })
          })
        </script>
         <script>
      $(document).ready(function(){
        $('.dropdown-content a').hover(function(){
          $(this).css({color:'black',background:'#ffd700'})
          $(this).find('i').css({color:'black'})
        },function(){
          $(this).css({color:'#ffd700',background:'rgb(46,31,26)'})
          $(this).find('i').css({color:'#ffd700'});
        })
      })
    </script>
    

  </body>
</html>
