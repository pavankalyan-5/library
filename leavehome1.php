<?php
session_start();
$con = mysqli_connect('localhost','root','','library');
if(!$con)
{
    echo 'not connected';
}
if(isset($_POST['log']))
{
    $s = $_POST['password'];
    $query = "select UserType,UserName from login where UserName = '$s'";
    $result = mysqli_query($con,$query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["UserType"];
        }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin:0;
  font-family:cursive;
}

.menu {
  overflow: hidden;
  background-color: #333;
  margin:0;
}

.menu a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.menu .icon {
  display: none;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
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

.menu a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .menu a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .menu a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .menu.responsive {position: relative;}
  .menu.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .menu.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .menu.responsive .dropdown {float: none;}
  .menu.responsive .dropdown-content {position: relative;}
  .menu.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
.header{
  width:100%;
  font-family:cursive;
  font-size:20px;
  margin: 0;
  text-align:center;
  color:black;
}
.bg{
  background-image: url('background0.png');
  height: 100%; 
  width: 100%;
  background-repeat: no-repeat;
  background-size: cover;
}
.coach{
  margin-left:5%;
}
form {border: 3px solid #f1f1f1;
background-color: gray;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.formstyle{
  width: 40%;
  height: 50%;
  text-align: left;
  background-color: white;
  bottom:300px;


}
.head{
  text-align: center;
  color:white;

}

button {
  background-color:green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  font-size:22px;
  display:block;
}

button:hover {
  opacity: 0.9;
  transition: (1.1);
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.container {
  padding: 10px;
}

span.psw {
  float: right;
  padding-top: 16px;
  color:black;
}
label{
  color: black;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>


<SCRIPT>
	function ShowAndHide() {
    var x = document.getElementById('SectionName');
    if (x.style.display == 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
</SCRIPT>

</head>
<body class="bg">
<div class="header">
  <h1>ANITS E-Leave Mangement</h1>
</div>
<div class="menu" id="myTopnav">
  <a href="#contact">About Us</a>
  <div class="dropdown">
    <button class="dropbtn">Login 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a  href="leavehome1.php">Principle Login</a>
      <a  href="leavehome1.php">HOD       Login</a>
      <a  href="leavehome1.php">Faculty   Login</a>
      <a  href="leavehome1.php">Admin     Login</a>
    </div>
  </div> 
  <a href="signup.html">Sign Up</a>
  <a href="#home">Home</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<div class="coach"> 
  <img src="coaching.png" width="400px" height="400px">
</div>
<DIV ID="SectionName">
    <div calss="Mydiv" style = "position:fixed; left:55%; top:170px; background-color:black;color:white;text-align: left;width:40%;height:70%;border: 2px solid black;">
   <div class="head">
    <h1> WELCOME </h1>
  </div>
<form action="leavehome1.php" method="post">
  <div class="container">
    <label for="xyz"><b>UsersName</b></label>
    <input type="text" placeholder="Enter Username Id" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
   <centre><button type="submit" name='log'>Login</button></centre>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="leavehome.html"><button type="button" class="cancelbtn">Cancel</button></a>
    <span class="psw">Forgot <a href="forgot.html">password?</a></span>
  </div>
</form>

</div>
</div>

</body>
</html>

