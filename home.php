<?php
include("security.php");
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
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
   color: black;
   background-image: url("https://www.wallpapertip.com/wmimgs/248-2484357_wallpaper-books-library-arrangment.jpg");
   background-repeat: no-repeat;
  background-size: 100% 150%;
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

.output {
  text-align:center;
  font-family: 'Source Code Pro', monospace;
  color:white;
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: black;
}
h1 {
    font-size:100px;
  }
  
/* Cursor Styling */

.cursor::after {
  content:'';
  display:inline-block;
  margin-left:3px;
  background-color:white;
  animation-name:blink;
  animation-duration:0.5s;
  animation-iteration-count: infinite;
}
h1.cursor::after {
  height:70px;
  width:13px;
}
p.cursor::after {
  height:13px;
  width:6px;
}

@keyframes blink {
  0% {
    opacity:1;
  }
  49% {
    opacity:1;
  }
  50% {
    opacity:0;
  }
  100% {
    opacity:0;
  }
}
.book {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  width: 18.5rem;
  height: 12.5rem;
  perspective: 70rem;
}
.cover {
  background-color: #36354e;
  transform: rotateY(0deg);
  width: 9.25rem;
  height: 12.5rem;
}
.page {
  top: 0.25rem;
  left: 0.25rem;
  background-color: #e9e6c4;
  transform: rotateY(0deg);
  width: 9rem;
  height: 12rem;
  text-align: right;
  font-size: 8px;
  color: #777;
  font-family: monospace;
}
.page::before, .page::after {
  display: block;
  border-top: 1px dashed rgba(0, 0, 0, 0.3);
  content: "";
  padding-bottom: 1rem;
}
.cover, .page {
  position: absolute;
  padding: 1rem;
  transform-origin: 100% 0;
  border-radius: 5px 0 0 5px;
  box-shadow: inset 3px 0px 20px rgba(0, 0, 0, 0.2),
    0px 0px 15px rgba(0, 0, 0, 0.1);
  box-sizing: border-box;
}
.cover.turn {
  animation: bookCover 1s forwards;
}
.page.turn {
  animation: bookOpen 1s forwards;
}
.page:nth-of-type(1) {
  animation-delay: 0.05s;
}
.page:nth-of-type(2) {
  animation-delay: 0.33s
}
.page:nth-of-type(3) {
  animation-delay: 0.66s;
}
.page:nth-of-type(4) {
  animation: bookOpen150deg 3s forwards;
  animation-delay: 0.99s;
}
.page:nth-of-type(5) {
  animation: bookOpen30deg 3s forwards;
  animation-delay: 1.2s;
}
.page:nth-of-type(6) {
  animation: bookOpen55deg 3s forwards;
  animation-delay: 1.25s;
}
@keyframes bookOpen {
  30% { z-index: 999 }
  100% {  transform: rotateY(180deg);
    z-index: 999;}
}
@keyframes bookCover {
  30% { z-index: 999 }
  100% {  transform: rotateY(180deg);
    z-index: 1;}
}
@keyframes bookOpen150deg {
  30% { z-index: 999 }
  100% {  transform: rotateY(150deg);
    z-index: 999;}
}
@keyframes bookOpen55deg {
  30% { z-index: 999 }
  100% {  transform: rotateY(55deg);
    z-index: 999;}
}
@keyframes bookOpen30deg {
  50% { z-index: 999 }
  100% {  transform: rotateY(30deg);
    z-index: 999;}
}

    </style>
  <body style="width: 100%; height:100%;background-size:cover;">
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
                   echo"<span style='color:#FFD700;' font-size:22px>".  $_SESSION['adminname']."</span>";
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
          </div>
          

          <div class="container py-5">
            <div class="output" id="output">
              <h1 class="cursor"></h1>
              <p style="font-size:30px;"></p>
            </div>
          </div>
       
          <div class="book">
  <span class="page turn"></span>
  <span class="page turn"></span>
  <span class="page turn"></span>
  <span class="page turn"></span>
  <span class="page turn"></span>
  <span class="page turn"></span>
  <span class="cover"></span>
  <span class="page"></span>
  <span class="cover turn"></span>
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
        </div>
                

</body>
<script>
  var i = 0,
    a = 0,
    isBackspacing = false,
    isParagraph = false;

// Typerwrite text content. Use a pipe to indicate the start of the second line "|".  
var textArray = [
  "Welcome To E-library|Timimgs : 8:00am to 4:pm", 
];

// Speed (in milliseconds) of typing.
var speedForward = 100, //Typing Speed
    speedWait = 1000, // Wait between typing and backspacing
    speedBetweenLines = 1000, //Wait between first and second lines
    speedBackspace = 25; //Backspace Speed

//Run the loop
typeWriter("output", textArray);

function typeWriter(id, ar) {
  var element = $("#" + id),
      aString = ar[a],
      eHeader = element.children("h1"), //Header element
      eParagraph = element.children("p"); //Subheader element
  
  // Determine if animation should be typing or backspacing
  if (!isBackspacing) {
    
    // If full string hasn't yet been typed out, continue typing
    if (i < aString.length) {
      
      // If character about to be typed is a pipe, switch to second line and continue.
      if (aString.charAt(i) == "|") {
        isParagraph = true;
        eHeader.removeClass("cursor");
        eParagraph.addClass("cursor");
        i++;
        setTimeout(function(){ typeWriter(id, ar); }, speedBetweenLines);
        
      // If character isn't a pipe, continue typing.
      } else {
        // Type header or subheader depending on whether pipe has been detected
        if (!isParagraph) {
          eHeader.text(eHeader.text() + aString.charAt(i));
        } else {
          eParagraph.text(eParagraph.text() + aString.charAt(i));
        }
        i++;
        setTimeout(function(){ typeWriter(id, ar); }, speedForward);
      }
      
    // If full string has been typed, switch to backspace mode.
    } else if (i == aString.length) {
      
      isBackspacing = true;
      setTimeout(function(){ typeWriter(id, ar); }, speedWait);
      
    }
    
  // If backspacing is enabled
  } else {
    
    // If either the header or the paragraph still has text, continue backspacing
    if (eHeader.text().length > 0 || eParagraph.text().length > 0) {
      
      // If paragraph still has text, continue erasing, otherwise switch to the header.
      if (eParagraph.text().length > 0) {
        eParagraph.text(eParagraph.text().substring(0, eParagraph.text().length - 1));
      } else if (eHeader.text().length > 0) {
        eParagraph.removeClass("cursor");
        eHeader.addClass("cursor");
        eHeader.text(eHeader.text().substring(0, eHeader.text().length - 1));
      }
      setTimeout(function(){ typeWriter(id, ar); }, speedBackspace);
    
    // If neither head or paragraph still has text, switch to next quote in array and start typing.
    } else { 
      
      isBackspacing = false;
      i = 0;
      isParagraph = false;
      a = (a + 1) % ar.length; //Moves to next position in array, always looping back to 0
      setTimeout(function(){ typeWriter(id, ar); }, 50);
      
    }
  }
}
</script>
<script>
$(window).on("load",function(){
     $(".book").fadeOut("slow");
}); 
</script>
</html>