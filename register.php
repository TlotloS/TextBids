<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
       <title>TextBids - Registration</title>
    
</head>
       <link rel="stylesheet" type="text/css" href="css/registration.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        
        

<body>
    
    <div class="container-fluid bg">
        <div class = "col-md4 col-sm-2 col-xs-12"> </div>
        <div class = "col-md4 col-sm-4 col-xs-12">
	
        <form method="post" action="register.php" class="form-container">
       
		<?php include('errors.php'); ?>
            
                <div class="header">
                    <h3>Register and account</h3>
                </div>

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
                            <select class="form-control " name="selFaculty" placeholder = "Select Faculty">
                                    <option>Humanities</option>
                                    <option>Health Sciences</option>
                                    <option>Education</option>
                                    <option>Theology</option>
                                    <option>Law</option>
                                    <option>Engineering</option>
                                    <option>Economic and Management Sciences</option>
                                    <option>Natural and Agricultural Sciences</option>
                            </select>
                        </div>

                <!-- Degree input -->
                        <div class="form-group">
                            <label for="\Degree">Degree</label>
                            <input type="text" class="form-control" name="Degree" placeholder="Enter degree" required>
                        </div>

                <!-- Academic year of Study -->
                        <div class="form-group sb">
                            <label for="selYOS">Academic year of study</label>
                            <select class="form-control" name="selYOS" >
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
			<button type="submit" class="btn btn-success btn-block" name="reg_user">Register</button>
		</div>
		
                <p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
        </div>
        </form> <!-- End of form container -->
        
        
        <!-- Footer -->
        <div class="col-md4 col-sm-8 col-xs-8">
            <div class="footer">
                <footer> ©2018 TextBids - An online 2nd hand texbook trading platform.Created by the students for the students </footer>
            </div>
        </div> 
        
    </div> <!-- End of background class -->

</body>
</html>