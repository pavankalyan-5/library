<?php
session_start()
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
      $(document).ready(function(){
        $('#fd').DataTable(
          {
        scrollY:        '100vh',
        scrollCollapse: true,
        paging:         true
    }
        );
      })
    </script>
    


<!-- Latest compiled JavaScript -->
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
.wrapper .sidebar ul li:hover .fa{
  color: black;
  background-color: transparent;
}
.wrapper .sidebar ul li:hover .fas{
  color: black;
  background-color: transparent;
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
.fa
{
  background-color: transparent;
}
.fas
{
  background-color: transparent;
}
.wrapper .main_content .header{
  padding: 20px;
  background: rgb(46,31,26);
  color: #FFD700;
  border-bottom: 1px solid #e0e4e8;
  position: fixed;
  z-index: 1;
  width: 85%;
  height: 61px;
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
.fdetails table th{
    background-color:black;
    height: 30px;
    color:white;
    
}
.fdetails table td{
    text-align:left;
    padding-left: 15px;
    
    
    
}


.fdetails table td form{
    left: 22px;
    top:22px ;

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

#fd_previous{
  color: #FFD700;
}
#fd_next
{
  color: #FFD700;
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
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}
#fd::before .odd{
background-color: #FFD700;
}
::-webkit-scrollbar {
width: 0px; /* remove scrollbar space /
background: transparent; / optional: just make scrollbar invisible */
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #9fa3b1;
}
    </style>
  <body style="width: 100%; height:100%; background-image:url('background.jpg');background-size:cover;background-attachment:fixed;background-repeat:no-repeat;">
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
        <div class="header">Welcome!! Have a nice day.
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
        <div class="dropdown" style="top: 2px;">
                <button class="dropbtn" style="display: inline;left:-5px; ">
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
                   
                   echo "<span style='color:#FFD700; font-size:22px;position:relative;left:20px'>". $_SESSION['stu_name']."</span>";
                   
                  ?>
                  <img src= "uploads/<?=$row['image']?>"  style="margin-left:15px"class="profile" id="pic">
                </button>
              <div class="dropdown-content" style="left:170px;background-color:rgb(46,31,26);color:#FFD700">
                <a href="profile.php" style="color:#FFD700">
                <i class="fa fa-user" aria-hidden="true"></i>
                  Profile
                </a>
                <a href="#" data-toggle="modal" style="color:#FFD700" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt"></i>
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
        <div class="info">
          <div id="content" style="display: block;">
            
            <div class="fdetails container-fluid">
                <table id="fd" class="table  table-dark  row" style="width:90% ;" >
                    <thead >
                      <tr>
                        <th>Name</th>
                        <th>Issue Date</th>
                        <th>Return Date</th>
                        <th>Fine</th>
                        <th>Renewal</th>
                      </tr>
                    </thead>
                    <?php
                    $con=mysqli_connect('localhost','root','','library') or die("Connection Problem....!");
                    $name=$_SESSION['stu_reg'];
                    $s="select * from transactions where stu_id='$name' and status<>'requested'";
                    $total=0;
                    $q=mysqli_query($con,$s);
                    if(mysqli_num_rows($q)==0)
                    {
                        ?>
                        <h1>No Books to Return</h1>
                        <?php
                    }
                    else{
                        while($row=mysqli_fetch_assoc($q))
                        {
                            $n1=$row['book_id'];
                            $s1="select * from book where book_id='$n1'";
                            $q1=mysqli_query($con,$s1);
                            $row1=mysqli_fetch_assoc($q1);
                            ?>
                            <tr class="succe">
                            
                                <td>
                                    <?php echo $row1['title'];?>
                                </td>
                                <td>
                                    <?php echo $row['issuedate'];?>
                                </td>
                                <td>
                                    <?php echo $row['returndate'];?>
                                </td>
                                <td>
                                    <?php 
                                    $fine=$row['fine'];
                                        if($row['returndate']<date('Y-m-d') && $row['status']=='accepted')
                                        {
                                            $datetime1 = new DateTime($row['returndate']);
                                            $is=$row['issuedate'];
                                            $datetime2 = new DateTime(date('Y-m-d'));
                                              
                                            $difference = $datetime1->diff($datetime2);
                                            
                                            $fine=$difference->format('%a')+$row['fine'];
                                            
                                            echo ($fine);
                                        }
                                        else
                                        {
                                            echo $row['fine'];
                                        }
                                        $total+=$fine;
                                    ?>
                                </td>
                                <td>
                                  <?php
                                  if($row['status']=='accepted')
                                  {
                                    $tid=$row['transid'];
                                   // echo $tid;
                                    echo "<form action='fine.php' method='post'><button type='submit' class='btn btn-primary' value='$tid $fine' name='renew' ><b> Renewal</b> </button></form>";
                                   
                                  }
                                    else
                                    
                                    echo '<button type="button" class="btn btn-danger" name="renew" disabled ><b> Returned</b> </button>';
                                    ?>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    
                    ?>
                    
                </table>
            </div>
            <h1 style="color:white;">TOTAL FINE:<?php echo $GLOBALS['total'];?></h1>
            
          <?php
          if(isset($_POST['renew']))
          {
            echo $_POST['renew'];
            $v=explode(' ',$_POST['renew']);
            $v1=$v[0];
            $f=$v[1];
            
            $d=date ( 'Y-m-d' , strtotime ( date('Y-m-d') . ' + 10 days' ));
            $s="update transactions set returndate='$d', fine='$f' where transid=$v1";
            //echo $s;
            $q=mysqli_query($con,$s);
            echo '<script>window.location.href="fine.php"</script>';
          }
          ?>
        </div>
       
    </div>
    
    <script>
    $(document).ready(function(){
      $('#fd_filter label').css({color:'white'});
      $('#fd_length label select option').css({color:'black'});
      $('#fd_length label').css({color:'white'});
      $('#fd_info').css({color:'white'});
      $('#fd_previous').css({color:'white'});
      $('#fd_next').css({color:'white'});
      $('#fd_wrapper').css({margin:'70px 0 0 0'});
      $('.dataTables_scrollBody').css({top:'-40px'});
    })
    </script>
    
</div>
  </body>
</html>
