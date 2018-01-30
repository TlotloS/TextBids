<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>TextBids - Login</title>
  <link rel="shortcut icon" href="textbook-exchange.jpg"/>

</head>
  <link rel="stylesheet" type="text/css" href="css/global.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="css/global.css" type="text/css" rel="stylesheet" > 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 


<body>

<div class="container-fluid bg">
    <div class = "col-md4 col-sm-4 col-xs-12"> </div>
    <div class = "col-md4 col-sm-4 col-xs-12"> 
    
        <form class ="form-container" method="post" action="login.php"> 
            
                <div class="header">
                    <h2>Login</h2>
                </div>
                      <?php include('errors.php'); ?>
                      <div class="form-group">
                              <label>Email address</label>
                              <input type="email" class="form-control" name="username" >
                      </div> 
                      <div class="form-group">
                              <label>Password</label>
                              <input type="password" class="form-control" name="password">
                      </div>
                    
                      <div class="form-group">
                              <button type="submit" class="btn btn-success btn-block" name="login_user">Login</button>
                      </div>
                      <p>
                              Not yet a member? <a href="register.php">Sign up</a>
                      </p>
            
        </form>
</div>
 		<div class="col-md4 col-sm-4 col-xs-12"></div> 
 </div>
    
</body>
</html>