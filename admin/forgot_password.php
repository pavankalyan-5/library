<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
    .form-gap {
    padding-top: 70px;
    }
    </style>
  </head>
 <body>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <div class="form-gap"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Forgot Password?</h2>
                        <p>You can reset your password here.</p>
                        <div class="panel-body">
            
                            <form id="register-form" role="form" action="forgot.php" autocomplete="off" class="form" method="post">
            
                            <div class="form-group">
                                <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                <input id="email" name="email" placeholder="email address" class="form-control"  type="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input name="recover-submit" type="submit" class="btn btn-lg btn-primary btn-block" value="Send Email" type="submit">
                            </div>

                            <div>
                                Remember?    <a href="studentlogin.php" style="text-decoration: none;font-size:15px">Signup</a>
                            </div>
                             <input type="hidden" class="hide" name="token" id="token" value=""> 
                            </form>

                            <?php
                                $con=mysqli_connect('localhost','root',"","library");
                                if(!$con)
                                {
                                echo "db not connected";
                                }
                                

                                if(isset($_POST['recover-submit'])){
                                    $var=$_POST['email'];
                                    $query="select * from login where email='$var'";
                                    $row = mysqli_query($con,$query);
                                    
                                    if(mysqli_num_rows($row) == 0){
                                        ?>
                                        <div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Warning!</strong> Entered mail is not Registered.
                                        </div>
                                        <?php  
                                    }

                                    else{
                                        session_start();
                                        $_SESSION["mail"] = $var;
                                        $sub="Link to reset your password";
                                        $msg="Click on the below link to reset your password
                                http://localhost/project/reset.php

                                With Regards
                                Admin
                                E-library
                                Anil Nerukonda Institute Of Techonology and Sciences.";

                                        if(mail($var,$sub,$msg)){
                                            ?>
                                            <div class="alert alert-success alert-dismissible">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Sucess!</strong>Link is sent to your Email.
                                            </div>
                                        <?php
                                        }
                                        else{
                                            ?>
                                            <div class="alert alert-danger alert-dismissible">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Failed!</strong>Error Occured while sending Email.
                                            </div>
                                            <?php
                                        }
                                    }
                                }

                            ?>
            
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
 </body>
</html>