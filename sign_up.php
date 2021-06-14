<!DOCTYPE html>
<html lang="en">
 <head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script
	src="https://kit.fontawesome.com/64d58efce2.js"
	crossorigin="anonymous"
	></script>
	<link rel="stylesheet" href="stylecss/sign_up.css" />
	<title>Sign in & Sign up Form</title>
  </head>
  <body>
  <header>
		<div class="container2">
			<div id="branding">
				<h1><img src="images/anitslogo1.png"  width="100px" height ="70px" style="border-radius: 50%;vertical-align:middle;"><span class="highlight">e-canteen</span> ANITS </h1>		
			</div>
			<nav>
				<ul>
					<li class="current"><a href="index.html">Home</a></li>
					<li ><a href="about_us.html">about_us</a></li>
					<li><a href="contact_us.html"> contact_us</a></li>
					<li><a href="l2.html">Register</a></li>
					<li><a href="MENU.html">MENU</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<?php
            session_start();
            //require_once "pdo.php";
            if(isset($_POST['submit'])) 
            {
                $sql="insert into customer(customerid,fname,lname,email,phno,password) values(:cusid,:fname,:lname,:email,:phno,:pwd)";
                $stmt=$pdo->prepare($sql);
                $stmt->execute(array(':cusid'=>$_POST['rollno'],':fname'=>$_POST['fname'],':lname'=>$_POST['lname'],':email'=>$_POST['email'],':phno'=>$_POST['phno'],':pwd'=>$_POST['pwd']));
                // echo "<p>registered successfully</p>";
                $mail1=$_POST['email'];
                $otp=rand(100000,999999);
                  $sub="E-LEAVE Website";
                  $msg="Hiii.. ::fname
                          You have successfully registered for E-Leave Website.
                          keep remember your details for further
                                  THANK YOU";
                  mail($mail1,$sub,$msg);

                
            } 
            if(isset($_POST['login'])) 
            {
                $roll=$_POST['username'];
                $sql="select * from customer where  customerid=$roll";
                $stmt=$pdo->query($sql);
                $row=$stmt->fetch(PDO::FETCH_ASSOC);
				 
				 
                if ($row===false)
                {
					 
					echo '<script type="text/javascript">' . 
					'document.getElementById("id8").innerHTML += "invalid id";' .
					'</script>';
				   
                  $_SESSION['username']='abort';
                }
                else
                {
                  if($row['password']===$_POST['password'])
                  {
                      $_SESSION['username']=$roll;
                      header('location:homepage.php');
                  }
                  else
                  {
                    echo '<script type="text/javascript">' . 
					'document.getElementById("id9").innerHTML += "incorrect password";' .
					'</script>';
                    $_SESSION['username']='abort';
                  }
            	}
       		 }
        
     	 ?>
		   


 
  <div class="container">
   <div class="forms-container">
    <div class="signin-signup">
	<form method="post" action="sign_up.php" class="sign-in-form" name="myform2" onsubmit="return fun2()" >
	 	<h2 class="title">Sign in</h2>
			<div class="input-field">
				<i class="fas fa-user"></i>
				<input type="text" name="username" placeholder="username/Roll no" />
			</div>
			<p id="id8" class="jsvalid"></p>
			<div class="input-field">
				<i class="fas fa-lock"></i>
				<input type="password" name="password" placeholder="Password" />
			</div>
			<p id="id9" class="jsvalid"></p>
				<input class="btn solid" type="submit" name="login" value="Login" />
			<div>
				<i class="fas fa-lock"></i>
				<input class="btn solid" type="submit" name="forget" value="forget password"  />
			</div>
			<div class="social-media">
			<a href="#" class="social-icon">
				<i class="fab fa-facebook-f"></i>
			</a>
			<a href="#" class="social-icon">
				<i class="fab fa-twitter"></i>
			</a>
			<a href="#" class="social-icon">
				<i class="fab fa-google"></i>
			</a>
			<a href="#" class="social-icon">
				<i class="fab fa-linkedin-in"></i>
			</a>
			</div>
     </form>
     <form  name="myform" method="post" action="sign_up.php"  onsubmit="return fun1()" class="sign-up-form">
	 <h2 class="title">Sign up</h2>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" placeholder="First name" name="fname"  />	
					</div>
					<p id="id1" class="jsvalid"></p>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" placeholder="Last name" name="lname" />
					</div>
					<p id="id2" class="jsvalid"></p>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" placeholder="username/Roll no" name="rollno" />
					</div>
					<p id="id3" class="jsvalid"></p>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" placeholder="phone no" name="phno"   />
					</div>
					<p id="id4" class="jsvalid"></p>
					<div class="input-field">
						<i class="fas fa-envelope"></i>
						<input type="email" placeholder="College Email" name="email" />
					</div>
					<p id="id5" class="jsvalid"></p>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="Password" name="pwd" />
					</div>
					<p id="id6" class="jsvalid"></p>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="Confirm Password" name="pwd2"/>
					</div>
					<p id="id7" class="jsvalid"></p>
					<input type="submit" class="btn" value="Sign up" name="submit"  />
			<p class="social-text">Or follow us with social platforms</p>
			<div class="social-media">
			<a href="#" class="social-icon">
				<i class="fab fa-facebook-f"></i>
			</a>
			<a href="#" class="social-icon">
				<i class="fab fa-twitter"></i>
			</a>
			<a href="#" class="social-icon">
				<i class="fab fa-google"></i>
			</a>
			<a href="#" class="social-icon">
				<i class="fab fa-linkedin-in"></i>
			</a>
			</div>
     </form>
    </div>
   </div>

   <div class="panels-container">
    <div class="panel left-panel">
     <div class="content">
      <h3>New here ?</h3>
      <p>
        WELCOME.... May who all come as guests leave as friends....  ##food-engine  ##ANITS
      </p>
      <button class="btn transparent" id="sign-up-btn">Sign up</button>
     </div>
    
    </div>
    <div class="panel right-panel">
     <div class="content">
      <h3>One of us ?</h3>
      <p>
      let's order why late by simply cliking this button....
      </p>
      <button class="btn transparent" id="sign-in-btn">Sign in</button>
     </div>
     
    </div>
   </div>
  </div>
  <script >
		const sign_in_btn = document.querySelector('#sign-in-btn');
		const sign_up_btn = document.querySelector('#sign-up-btn');
		const container = document.querySelector('.container');

		sign_up_btn.addEventListener('click', () => {
		container.classList.add('sign-up-mode');
		});

		sign_in_btn.addEventListener('click', () => {
		container.classList.remove('sign-up-mode');
		});
		function fun1()
		{
			var y = document.forms["myform"]["fname"].value;
			if (y=="")
			{
				document.getElementById("id1").innerHTML="please fill the name";
				return false;
			}
			if (y.length >15)
			{
				document.getElementById("id1").innerHTML="first name should be less than 16";
				return false;
			}

			var z= document.forms["myform"]["lname"].value;
			if (z=="")
			{
				document.getElementById("id2").innerHTML="please fill the last name";
				return false;
			}
			if (z.length >15)
			{
				document.getElementById("id2").innerHTML="last name should be less than 16";
				return false;
			}
			// var u=document.forms["myform"]["rollno"].value;
			// if (u=="")
			// {
			// 	document.getElementById("id3").innerHTML="please fill roll  number";
			// 	return false;
			// }
			// if (u.length >12 || x.length<12)
			// {
			// 	document.getElementById("id3").innerHTML="Pease enter a phone number of size 10";
			// 	return false;
			// }
			// if (u!=[0-9])
			// {
			// 	document.getElementById("id3").innerHTML="Pease enter a valid roll number";
			// 	return false;
			// }
			// var x= document.forms["myform"]["phno"].value;
			// if (x=="")
			// {
			// 	document.getElementById("id4").innerHTML="please fill phone number";
			// 	return false;
			// }
			// if (x.length >11 || x.length<10)
			// {
			// 	document.getElementById("id4").innerHTML="Pease enter a phone number of size 10";
			// 	return false;
			// }
			// var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
			// if (x.value.match(phoneno))
			// {
			// 	document.getElementById("id4").innerHTML="Pease enter a valid phone number";
			// 	return false;
			// }
			// var w= document.forms["myform"]["email"].value;
			// var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
			// if (w=="")
			// {
			// 	document.getElementById("id5").innerHTML="please fill email address";
			// 	return false;
			// }
			// if(w.value.match(mailformat))
			// {
			// }
			// else
			// {
			 
			// 	document.getElementById("id5").innerHTML="please fill email address";
			// 	return false;
			// }
			var p= document.forms["myform"]["pwd"].value;
			if (p=="")
			{
				document.getElementById("id6").innerHTML="please fill  password";
				return false;
			}
			var q= document.forms["myform"]["pwd2"].value;
			if (q=="")
			{
				document.getElementById("id7").innerHTML="please fill conform password";
				return false;
			}
			if (p!=q)
			{
				document.getElementById("id7").innerHTML="please fill correct conform password";
				return false;
			}
			
		}
		function fun2()
		{
			var q= document.forms["myform2"]["username"].value;
			if (q=="")
			{
				document.getElementById("id8").innerHTML="please fill username";
				return false;
			}
			var p= document.forms["myform2"]["password"].value;
			if (p=="")
			{
				document.getElementById("id9").innerHTML="please fill password";
				return false;
			}
			
		}
  </script>
 </body>
 <footer>
    <p>ANITS e-canteen, Copyright &copy; 2021</p><br>
    <p1>follow us on</p1>
    <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png"width="30px" height="20px">
    <img src="https://i.pinimg.com/originals/f7/5d/94/f75d94874d855a7fcfcc922d89ac5e80.png"width="30px" height="20px">
  </footer>
</html>