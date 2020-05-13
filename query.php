<?php
    
    ob_start();
    $varname='';
    $varname = $_GET['varname'];
    ob_flush();
    if(empty($varname)){
        header('location: index.php');
    }
    else{

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        *{margin: 0;padding: 0; }
        .pl {
            padding-top: 150px;
            padding-left: 0px;
        }
        .pr {
            padding-right: 0px;
        }

        
        body {
            
        background-image: url("data:image/jpeg;base64,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");
        background-size: cover;
        /* background-position: center; */
        } 
        .fnt{
            color: aquamarine !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark justify-content-center ">
  
            <a class="navbar-brand "><h4>Registration/Login</h4></a>
              
      </nav>
    </div>
    
    
     <?php include('clients.php'); ?>
    <div><?php include('errors.php');?></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 pr">
            
                <form class="form-horizontal" role="form" action="clients.php" method="POST">
                
                    <div class="form-group">
                        <label for="fname" class="col-sm-6 control-label fnt">First Name</label>
                        <div class="col-sm-6">
                            <input type="text" id="fname" placeholder="First Name" class="form-control"  name="fname" autofocus required >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lname" class="col-sm-6 control-label fnt">Last Name</label>
                        <div class="col-sm-6">
                            <input type="text" id="lname" placeholder="Last Name" class="form-control" name="lname" autofocus required >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="col-sm-6 control-label fnt">Username </label>
                        <div class="col-sm-6">
                            <input type="text" id="username" placeholder="Username" class="form-control" name="username" required >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass" class="col-sm-6 control-label fnt">Password</label>
                        <div class="col-sm-6">
                            <input type="password" id="pass" placeholder="Password" class="form-control" name="pass" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="passagain" class="col-sm-6 control-label fnt">Confirm Password</label>
                        <div class="col-sm-6">
                            <input type="password" id="passagain" placeholder="Password" class="form-control" name="passagain" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mail" class="col-sm-6 control-label fnt">Email </label>
                        <div class="col-sm-6">
                            <input type="email" id="mail" placeholder="Email" class="form-control" name= "mail" required >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber" class="col-sm-6 control-label fnt">Phone number </label>
                        <div class="col-sm-6">
                            <input type="phoneNumber" id="phone" placeholder="Phone" class="form-control" name="phone" required>
                        </div>
                    </div>
                    
        
                    
                    <input type="hidden" name="service" value="<?php echo $varname;?>">
                    <button type="submit"  class="btn btn-primary btn-block" name="reg_user">Register</button>
                </form> <!-- /form -->
            </div>
            <div class="col-lg-6 col-sm-6 pl">
                <!-- <br> -->
                <div id="login">
                    <!-- <h1 class="text-center text-white pt-5">Login</h1> -->
                    <div class="container">
                        <div id="login-row" class="row justify-content-center align-items-center">
                            <div id="login-column" class="col-md-6">
                                <div id="login-box" class="col-md-12">
                                    <form id="login-form" class="form" action="clients.php" method="post">
                                        <h3 class="text-center text-info fnt">Login</h3>
                                        <div class="form-group">
                                            <label for="username" class="text-info fnt">Username:</label><br>
                                            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label for="pass" class="text-info fnt">Password:</label><br>
                                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
                                        </div>
                                        <input type="hidden" name="service" value="<?php echo $varname;?>">
                                        <div class="form-group">
                                            
                                            <input type="submit" name="login" class="btn btn-info btn-md" value="login">
                                        </div>
                                        <!-- <div id="register-link" class="text-right">
                                            <a href="#" class="text-info">Forgot Password</a>
                                        </div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
        
    </div> <!-- ./container -->
</body>
</html>
<?php 
    }
?>