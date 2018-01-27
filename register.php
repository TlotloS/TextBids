<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        
        
       <!-- <link rel="stylesheet" type="text/css" href="css/registration.css"> -->
        <title>TextBids - Registration</title>
    
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

                <!-- Name input -->
                        <div class="form-group">
                            <label for="\Name">Name</label>
                            <input type="text" class="form-control" name="Name" placeholder="Enter Name" required >
                        </div>

                <!-- Surname input -->
                        <div class="form-group">
                            <label for="\Surname">Surname</label>
                            <input type="text" class="form-control" name="Surname" placeholder="Enter Surname" required>
                        </div>

                <!-- Student Number input -->
                        <div class="form-group">
                            <label for="\StudentNo">Student Number</label>
                            <input type="text" class="form-control" name="StudentNo" placeholder="Enter Student Number" required>
                        </div>

                <!-- Faculty input-->
                        <div class="form-group">
                            <label for="selFaculty">Faculty</label>
                            <select name="selFaculty" placeholder = "Select Faculty">
                                    <option>1st Year</option>
                                    <option>2nd Year</option>
                                    <option>3rd Year</option>
                                    <option>4th Year</option>
                                    <option>Post Graduate</option>
                            </select>
                        </div>

                <!-- Degree input -->
                        <div class="form-group">
                            <label for="\Degree">Degree</label>
                            <input type="text" class="form-control" name="Degree" placeholder="Enter degree" required>
                        </div>

                <!-- Academic year of Study -->
                        <div class="form-group">
                            <label for="selYOS">Academic year of study</label>
                            <select name="selYOS" >
                                <option>1st Year</option>
                                <option>2nd Year</option>
                                <option>3rd Year</option>
                                <option>4th Year</option>
                                <option>Post Graduate</option>
                            </select>
                        </div>

                <!-- Email input -->
                        <div class="form-group">
                            <label for="\InputEmail1">Email address</label>
                            <input type="email" class="form-control" name="InputEmail1" placeholder="Enter email address" required>
                        </div>

                <!-- Cell Phone Number -->
                        <div class="form-group">
                            <label for="\CellNo">Cellphone number</label>
                            <input type="text" class="form-control" name="CellNo" placeholder="Enter cell phone number" required>
                        </div>

                <!-- Password input1 -->
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" name="Password" placeholder="Enter password" required>
                        </div>

                <!-- Password input2 Confirmation-->
                        <div class="form-group">
                            <label for="ConfirmPassword">Confirm Password</label>
                            <input type="password" class="form-control" name="ConfirmPassword" placeholder="Confirm password" required>
                        </div>

		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>