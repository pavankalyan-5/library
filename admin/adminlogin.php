<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   
    <style>
*{
    margin: 0;
    padding: 0;
    font-family: 'Josefin Sans', sans-serif;
}

.container{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(lib1.jpg);
    background-size:cover;
    box-sizing: border-box;
}

.navbar{
    height: 10%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    background: rgba(0,0,0,0.3);
    border-radius: 6px;
}
nav{
    flex: 1;
    text-align: left;
    margin-left: 45px;
    font-weight: bold;
}

nav ul li{
    list-style: none;
    display: inline;
    margin-left: 30px;
}
li a:hover {
    background-color: #111;
    padding: 8px;
  }
  nav ul li button
  {
      font-size: 20px;
      color: white;
      outline: none;
      border:none;
      background:transparent;
      cursor: pointer;
      font-family: sans-serif;
      width:110%;
      height: 35px;
  
  }
  nav ul li button:hover
  {
      background-color:rgb(73, 129, 129);
      border-radius:10px;
      border-width: 5px;
      transform: translateY(-2px);
  }

.row{
    display: flex;
    height: 10%;
    align-items: center;
    flex-basis: 50%;
    
}


h1{
    height: 10px;
    color: #fff;
    font-size: 80px;
    margin-left: 65px;
    text-shadow:rgba(0,0,0,0.7);
    
}
#login-form
{
    display:contents;
    transform: translate(0,100px);
}
.form-box
{
    width: 380px;
    height: 440px;
    position: relative;
    margin: 1% auto;
    background:transparent;
    padding: 10px;
    overflow: hidden;
    border-radius: 30px;
    border: solid rgb(85, 72, 72);
    
}
.button-box
{
    width: 200px;
    height:50px;
    margin: 35px auto;
    position: relative;
    box-shadow: 0 0 20px 9px #ff61241f;
    border-radius: 30px;
    background-color:#CCCFB0;
    border: black;
}
.toggle-btn
{
    padding:10px 30px;
    cursor: pointer;
    background:transparent;
    border: 0;
    outline: none;
    position: relative;

}
#btn
{
    top:0;
    left:0;
    position:absolute;
    width: 90px;
    height: 100%;
    background: #A1B9A3;
    border-color: black;
    border-width: 2px;
    border-radius: 30px;
    transition: .5s;
    

}
.input-group-login
{
    top: 150px;
    position: absolute;
    width: 280px;
    transition: .5s;
    border-radius: 10px;
    border-color:rgba(78, 51, 51, 0.3);
    border-width: 5px;
    
}
.input-group-register
{
    top: 120px;
    position: absolute;
    width: 280px;
    transition: .5s;
    border-radius: 10px;
    border-color: rgba(78, 51, 51, 0.3);
    border-width: 5px;
   
}
.input-field
{
    width:100%;
    padding:10px 0;
    
    margin:5px 0;
    border-top:0;
    border-left:0;
    border-right:0;
    border-bottom:1px solid #999;
    outline: none;
    background:transparent;
    border-radius: 10px;
    
}
.input-field::placeholder
{
    color:white;

}
.submit-btn
{
    width:85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background:rgb(19, 15, 15);
    
    border: 0;
    outline: none;
    border-radius: 30px;
    color: white;
    
}
.submit-btn:hover{
    background-color: red;
}
.check-box
{
    margin: 30px 10px 34px 0;


}
span
{
    color:white;
    font-size: 12px;
    bottom: 68px;
    position: absolute;
    background:transparent;
}
#login
{
    left: 50px;
}
#login a{
    position: relative;
    text-decoration: none;
    color: white;
    font-size:12px;
    top:-5px;
    left: 150px;
}
#login a:hover{
    color: red;
}
#login input
{
    color: white;
    font-size: 15;
}
#register
{
    left:450px;
}
#register input
{
    color: white;
    font-size: 15;
}
#btn1
{
   transform: translate(-5px,10px); 
}
#btn2
{
   transform: translate(100px,-26px);
   
}
#at
{
    transform: translate(55px,60px);
    font-size: 30px;
    color: rgb(19, 15, 15);
}
        ::placeholder
        {
            color: white;
        }
    </style>

<script>
   $(document).ready(function(){
  
  $('#eye').click(function(){
       
        if($(this).hasClass('fa-eye-slash')){
           
          $(this).removeClass('fa-eye-slash');
          
          $(this).addClass('fa-eye');
          
          $('#admin_pass').attr('type','text');
            
        }else{
         
          $(this).removeClass('fa-eye');
          
          $(this).addClass('fa-eye-slash');  
          
          $('#admin_pass').attr('type','password');
        }
    });
});
    </script>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <nav>
                <ul>
                    <li><button onclick="location.replace('mainpage.html')"class="loginbtn" style="width: auto;">Home</button>
                    <li><button onclick="location.replace('aboutus.html')"class="loginbtn" style="width: auto;">About Us</button>
                    <li><button onclick="location.replace('contactform.php')"class="loginbtn" style="width: auto;">Contact Us</button>
                </ul>
            </nav>
        </div>
        <div class="row">
            
                <h1>E-Library</h1>
            
        </div>
            <div id="login-form" class="login-page">
                <div class="form-box">
                    <div class="button-box">
                    
                        <span id="at"><b>Admin</b></span>
                        
                    
                    </div>
                    <form id='login' action="adminlogin.php" class="input-group-login" method="POST">
                        <input type='text' id='admin_reg' name="admin_reg" class="input-field" placeholder="Enter your Reg No" required>
                        <em style="cursor:pointer; position:relative;left:90%;top:30px;"class="fas fa-eye-slash" id="eye"></em>
                        <input type='password' id="admin_pass"  name="admin_pass" class="input-field" placeholder="Enter Password" required>
                        
                        <p id="para" style="color: red;font-size:12px; position:relative; top:5px;">
                        </p>
                        <input type="checkbox" class="check-box"><span>Remember Password</span>
                        <a href="forgot.php">Forgot Password?</a>
                        <button type="submit" name="login" class="submit-btn">Log in</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </body>

</html>


<?php
  
    $con=mysqli_connect("localhost","root","","library");
    if(!$con)
    {
        echo "not connected";
    }
    if(isset($_POST['login']))
    {
        $user=$_POST['admin_reg'];
        $pass=$_POST['admin_pass'];
        $query="select * from admin where admin_reg='$user'";
        $query_run=mysqli_query($con,$query);
        $row=mysqli_fetch_assoc($query_run);
        
        
        if(mysqli_num_rows($query_run) > 0)
        {
            
            if($_POST['admin_pass']!=$row['admin_pass'])
            {
                
                echo "<script>
                            document.getElementById('admin_reg').value='$user';
                                document.getElementById('admin_pass').value='$pass';
                                document.getElementById('admin_pass').focus();
                            document.getElementById('para').innerHTML='*Wrong Password'</script>";
            }
            else{
                $_SESSION['adminreg']=$user;
                $_SESSION['adminname']=$row['admin_name'];
                echo '<script>window.location.href="home.php"</script>';
            }
            
        }
        else
        {
            echo '<script>document.getElementById("para").innerHTML="**Invalid Username";</script>';
        }
    }
?>

