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
    <link rel='stylesheet' type='text/css' media='screen' href='slogin.css'>
    <script src='main.js'></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
    <script>
        document.getElementById('login-form').style.display='block';
    </script>
    <style>
        ::placeholder{
            color:white;
        }
        #re
        {
            font-size: 12px;
        }
    </style>
    <script>
            var x='<?php echo "hi"?>';
            var phone_input = document.getElementById("regno");

             phone_input.addEventListener('input', () => {
             phone_input.setCustomValidity('');
            phone_input.checkValidity();
            });

            phone_input.addEventListener('invalid', () => {
            if(phone_input.value === '') {
            phone_input.setCustomValidity('Enter regno!');
            } else {
            phone_input.setCustomValidity('please enter your full college reg no');
             }
            });
            
        </script>

        <script>
           function validatereg()
           {
                var rn=document.getElementById('regno1');
                rn.addEventListener('input',() =>{
                    rn.setCustomValidity('');
                    rn.checkValidity();
                }
                );
                rn.addEventListener('invalid', () => {
                if(rn.value === '') {
                rn.setCustomValidity('Enter regno!');
                } else {
                rn.setCustomValidity('please enter your full college reg no');
                }
                });
                var email=document.getElementById('email');
                email.addEventListener('input',() =>{
                    email.setCustomValidity('');
                    email.checkValidity();
                }
                );
                email.addEventListener('invalid', () => {
                if(email.value === '') {
                email.setCustomValidity('Enter email!');
                } else {
                email.setCustomValidity('please enter your college mail');
                }
                });
                var pass=document.getElementById('pass1');
                pass.addEventListener('input',() =>{
                    pass.setCustomValidity('');
                    pass.checkValidity();
                }
                );
                pass.addEventListener('invalid', () => {
                if(pass.value === '') {
                pass.setCustomValidity('Enter password!');
                } else {
                pass.setCustomValidity('should contain 1 upper,1lowercase ,numerical,1special char');
                }
                });
                var pass1=document.getElementById('pass2');
                pass1.addEventListener('input',() =>{
                    pass1.setCustomValidity('');
                    pass1.checkValidity();
                }
                );
                pass1.addEventListener('invalid', () => {
                if(pass1.value === '') {
                pass1.setCustomValidity('Enter regno!');
                } 
                else if(pass.value!=pass1.value){
                pass1.setCustomValidity('Password and Comfirm password shoul be same');
                }
                });

           }
        </script>
        <style>
            
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
        </style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <nav>
                <ul>
                    <li><button onclick="location.replace('mainpage.html')" class="loginbtn" style="width: auto;">Home</button>
                    <li><button class="loginbtn" style="width: auto;">About Us</button>
                    <li><button class="loginbtn" style="width: auto;">Contact</button>
                </ul>
            </nav>
        </div>
        <div class="row">
            
                <h1>E-Library</h1>
            
        </div>
            <div id="login-form" class="login-page">
                <div class="form-box">
                    <div class="button-box">
                    
                        <div id="btn"></div>
                        <button type="button"onclick='login()' class="toggle-btn" id="btn1" ><b style="background-color:transparent">Log In</b></button>
                        <button type="button"onclick='register()' class="toggle-btn" id="btn2" ><b style="background:transparent">Register</b></button>
                    
                    </div>
                    <form id='login' class="input-group-login" action="studentlogin.php" method="post" >
                        <input type='text' class="input-field" placeholder="Enter your Reg No" pattern="\d{9}[l 0-9]\d{2}" name="regno" required id="regno">
                        <input type='password'  class="input-field" placeholder="Enter Password" required name="pass"  id="pass"required>
                        
                        <br>
                        <br>
                        <p id="re" style="color: red;"></p>
                        <input type="checkbox" class="check-box"><span>Remember Password</span>
                        
                        <button type="submit" class="submit-btn" name="li">Log in</button>
                    </form>
                    <?php
                        
                        $con=mysqli_connect('localhost','root','','library');
                        if(!$con)
                        {
                            echo "problem in connection";
                        }
                        if(isset($_POST['li']))
                        {

                        
                                $reg_no=$_POST['regno'];
                                $pass=$_POST['pass'];
                                $s="select * from login where regno='$reg_no'";
                                $query=mysqli_query($con,$s);
                                $c=mysqli_num_rows($query);
                                $row=mysqli_fetch_assoc($query);
                                if($c==0)
                            {
                                echo "<script>
                                
                                document.getElementById('re').innerHTML='*You cannot login';
                                </script>";
                                
                                
                            }
                        
                        else if($row['password']!= $pass)
                        {
                            echo "<script>
                            document.getElementById('regno').value=$reg_no;
                                document.getElementById('pass').value='$pass';
                                document.getElementById('pass').focus();
                            document.getElementById('re').innerHTML='*Wrong Password'</script>";
                        }
                        else{
                            
                            $_SESSION['stu_reg']=$reg_no;
                            $_SESSION['stu_name']=$row['name'];
                            
                            echo "<script>window.location.href='studentpage1.php'</script>";
                            
                            
                        }
                        }
                    
                    ?>
                    
                    <form id=register class='input-group-register' onsubmit="">
                        <input type="text" class='input-field' placeholder="Enter Your Name" required>
                        <input type="text" class='input-field' placeholder="Enter Your Reg No" required pattern="\d{9}[l 0-9]\d{2}" id="regno1" onkeydown="validatereg();">
                        <input type="email" class='input-field' placeholder="Enter Your Email" required pattern="^[a-zA-Z0-9_.+-]+@(?:(?:[a-zA-Z0-9-]+\.)?[a-zA-Z]+\.)?(anits)\.edu\.in$" id='email'onkeydown="validatereg();">
                        <input type="password" class='input-field' placeholder="Enter Your Password" required pattern="(?=^.{8,}$)((?=.\d)|(?=.\W+))(?![.\n])(?=.[A-Z])(?=.[a-z]).*$" id="pass1"onkeydown="validatereg();">
                        <input type="password" class='input-field' placeholder="Confirm Your Password" required id='pass2' pattern="(?=^.{8,}$)((?=.\d)|(?=.\W+))(?![.\n])(?=.[A-Z])(?=.[a-z]).*$" id="pass1"onkeydown="validatereg();">
                        <input type="checkbox" class="check-box" id="checked" onchange="document.getElementById('reg-btn').disabled=!this.checked"><span>I Agree to the Terms and Conditions</span>
                        <button type="submit" class="submit-btn" id="reg-btn" disabled >Register</button>

                    </form>
                </div>
                
            </div>
        </div>
        <script>
            var x=document.getElementById('login');
            var y=document.getElementById('register');
            var z=document.getElementById('btn');
            function register()
            {
                x.style.left='-400px';
                y.style.left='50px';
                z.style.left='110px';
            }
            function login()
            {
                x.style.left='50px';
                y.style.left='450px';
                z.style.left='0px';
            }
        </script>
        <script>
            var modal=document.getElementById('login-form');
            window.onclick=function(event)
            {
                if(event.target==modal)
                {
                    modal.style.display="none";
                }
            }
        </script>
        
    </body>
    
</html>