<?php
session_start();
?>
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
                        <h2 class="text-center">Reset Password</h2>
                        <div class="panel-body">
            
                            <form id="register-form" role="form" action="reset.php" autocomplete="off" class="form" method="post">
            
                            <div class="form-group">
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                <input id="password" name="password" autocomplete="off" placeholder="New Password" class="form-control"  type="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                <input id="password1" name="password1" autocomplete="off" placeholder="Re-Enter Password" class="form-control"  type="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input name="recover-submit" type="submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                            </div>

        
                             <input type="hidden" class="hide" name="token" id="token" value=""> 
                            </form>

                            <?php
                                $con=mysqli_connect('localhost','root',"","library");
                                if(!$con)
                                {
                                echo "db not connected";
                                }
                                

                                if(isset($_POST['recover-submit']))
                                {
                                    $mail=$_SESSION['mail'];
                                    $cur=$_POST['password'];
                                    $reenter=$_POST['password1'];

                                    if($cur != $reenter)
                                    {?>
                                        <div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Warning!</strong> Password should match.
                                        </div>
                                    <?php
                                    }
                                    else
                                    {
                                        $query="update login set password='$cur' where email='$mail'";
                                        if($row = mysqli_query($con,$query))
                                        {
                                            ?>
                                            <div class="alert alert-success alert-dismissible">
                                               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                               Password is reseted Successfully!! Click Here to <a href="studentlogin.php"><strong>Login</strong></a>
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