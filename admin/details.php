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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
              $(document).ready(function(){
              $(".default_option").click(function(){
                $(".dropdown ul").addClass("active");
                
              });

              $(".dropdown ul li").click(function(){
                var text = $(this).text();
                if(text == "STUDENT ID")
                  $("#hide").val('stu_id');
                else if(text == "BOOK ID")
                  $("#hide").val('book_id');
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
  outline: none;
  font-family: 'Josefin Sans', sans-serif;
}



body{
   background-color: #f3f5f9;
}



h2 {
  margin: 10px;
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

.dropdown1 {
  float: right;
  position: relative;
  top: -10px;
  right:50px;
}

.dropbtn{
  position: relative;
  top: -10px;
}

.dropdown1 .dropbtn {
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

.dropdown1:hover .dropdown-content{
  display: block;
}



.wrapper1{
  width: 100%;
  height: 120px;
  background-color: rgba(46,31,26,0.6);
  position: fixed;
  top: 5%;
  left: 40%;
  z-index: 1;
  margin-left: -27%;
}


.wrapper1 .search_box{
  position: fixed;
  margin-top: 30px;
  width: 500px;
  background: #fff;
  border-radius: 5px;
  height: 65px;
  display: flex;
  padding: 10px;
  box-shadow: 0 8px 6px -10px #b3c6ff;
  z-index: 2;
  left: 40%;
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
  box-shadow: 8px 8px 6px -10px #b3c6ff;
}

.wrapper1 .search_box .dropdown ul.active{
  display: block;
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

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #9fa3b1;
}
::-moz-placeholder { /* Firefox 19+ */
 color: #9fa3b1;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #9fa3b1;
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
  color: #fff;
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

.header{
  height: 50px;
  background-color: #FFD700;
}
.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  height: 50px;
  position: fixed;
  z-index: 2;
  background: rgb(46, 31, 26);
  color: #FFD700;
  width: 88%;
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

.radio{
  background: transparent;
  width: 100%;
  height: 100%;
  text-align: left;
}
#tran{
  position: relative;  
  left:-10px;
  width: 120%;
}
#tran_wrapper{
  top: 60px;
  height: auto;
}
#tran_info{
  position: relative;
  top:10px;
}
#k
{
    top: -300px;
}
@media (max-height: 500px){
  .social_media{
    display: none !important;
  }
}

    </style>
  <body style="width: 100%; height:100%;background-size:cover;background-attachment:fixed;background-repeat:norepeat;background-image:url('https://www.wallpapertip.com/wmimgs/248-2484357_wallpaper-books-library-arrangment.jpg')">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script>  $(document).ready( function () {
    $('#tran').DataTable();
  });</script>
    
  
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
            <div class="dropdown1">
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
            <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

            <div class="wrapper1">
            <div class="search_box">
              <form action="details.php" method="GET">
                  <div class="dropdown">
                      <div class="default_option">ALL</div>  
                          <ul>
                              <li>ALL</li>
                              <li>BOOK ID</li>
                              <li>STUDENT ID</li>
                          </ul>
                      </div>
                      
                      <div class="search_field">
                          <input type="text" name="search" class="input" placeholder="Search" style="width:100%;height:100%; ">
                          <div class="hidden">
                              <input type="text" name="hide" value="all" id="hide" style="display:none; width:0%; height:0%;"/>
                          </div>
                          <button name="submit" type="submit"><i class="fas fa-search" ></i></button>
                      </div>
              </form>
          </div>
            </div>

            
          <div id="k">
            <table id="tran" class="table table-dark hover" style=" color:black; width:70%;margin-top:2%">
              <thead>
                <tr>
                <th>BOOK_ID</th>
                <th>STUDENT_ID</th>
                <th>STATUS</th>
                <th>ACTION</th>
                </tr>
                
              </thead>
                    <?php
                       $con=mysqli_connect('localhost','root',"","library");
                       if(!$con)
                       {
                         echo "db not connected";
                       }

                      
                       $query="select * from transactions";
                       
                       if(isset($_GET['submit']))
                       {
                          $var = $_GET['hide'];
                          $search=$_GET['search'];
                          if($var === 'stu_id')
                          {
                            $query="select * from transactions where stu_id = '$search'";
                          }
                          else if($var === 'book_id'){
                            $query="select * from transactions where book_id = '$search'";
                          }
                          else {
                            $query="select * from transactions";
                           }
                       }
                       

                       $q=mysqli_query($con,$query);

                       

                       while($row=mysqli_fetch_assoc($q))
                        {
                        ?>
                        
                        <tr>
                          <td><?php echo $row['book_id'] ?></td>
                          <td><?php echo $row['stu_id'] ?></td>
                          <td><?php echo $row['status'] ?></td>
                          <?php
                            if($row['status'] =="request")
                            {
                             ?>     
                                  <td><form style="width:100%;" action="transaction.php" method="post">
                                      <button class="btn btn-dark" style="width:90%;color:white; background-color:black; " name='action' type="submit" value="<?php echo $row['transid']?>">Accept</button>
                                   </form></td>
                            <?php
                            }
                         
                            else if($row['status'] =="accepted")
                            {?>
                                  <td><form style="width:100%;" action="transaction.php" method="post"><button class="btn btn-dark" style="width:90%;color:white; background-color:black;" name='action' type="submit" value="<?php echo $row['transid']?>">Return</button></form></td>
                                  <?php
                            }
                          
                            else
                            {?>
                                  <td><button class="btn btn-dark" style="width:90%;color:white; background-color:black;" disabled value="<?php echo $row['transid']?>">Returned</button></td>
                                  <?php
                            }
                          ?>
                        </tr>

                          
                        <?php
                        }
                        ?> 
                   
            </table>
            </div>
            </div>
   
</body>
<script>

    $(document).ready(function(){
      $('#tran_filter label').css({color:'white'});
      $('#tran_filter input').css({color:'white'});
      $('#tran_wrapper').css({background:'rgba(46,31,26,0.6)',padding:'12px 24px',margin:'10%'});
      $('#tran_length label').css({color:'white'});
      $('#tran_length select').css({color:'white'});
      $('#tran_length select option').css({color:'black'});
      $('#tran_info').css({color:'white'});
      $('#tran_previous').css({color:'white'});
      $('#tran_next').css({color:'white'});
      $('#tran').css({width:'80%'});

    })

</script>
</html>

