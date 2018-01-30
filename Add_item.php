<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
       <title>TextBids - Add item</title>
    
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
                    <h2>Add new textbook sale</h3>
                </div>

                <!-- Textbook Title -->
                        <div class="form-group">
                            <label for="\Title">Title</label>
                            <input type="text" class="form-control" name="Title" placeholder="Textbook Title" required >
                        </div>

                <!-- ISBN -->
                        <div class="form-group">
                            <label for="\ISBN">ISBN</label>
                            <input type="text" class="form-control" name="ISBN" placeholder="(Optional)">
                        </div>
                
                <!-- Author -->
                        <div class="form-group">
                            <label for="\Author">Author</label>
                            <input type="text" class="form-control" name="Author" placeholder="Enter Author Credentials" required>
                        </div>
                
                <!-- Module -->
                        <div class="form-group">
                            <label for="\Module">Module</label>
                            <input type="text" class="form-control" name="Module" placeholder="Enter Module Name" required>
                        </div>
               
                <!-- Module Code -->
                        <div class="form-group">
                            <label for="\Module_Code">Module Code</label>
                            <select class="form-control " name="Module_Code" placeholder = "Select Module Code">
                                <option>Other</option>
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

               <!-- Academic year of Study -->
                        <div class="form-group sb">
                            <label for="selYOS">Academic year of study</label>
                            <select class="form-control" name="selYOS" >
                                <option>1st Year</option>
                                <option>2nd Year</option>
                                <option>3rd Year</option>
                                <option>4th Year</option>
                            </select>
                        </div>

                <!-- Textbook Price -->
                        <div class="form-group">
                            <label for="\Book_Price">Textbook Price</label>
                            <input type="text" class="form-control" name="Book_Price" placeholder="Enter Price (ZAR)" required>
                        </div>

		<div class="input-group">
			<button type="submit" class="btn btn-success btn-block" name="Add_item">Add item for sale</button>
		</div>
       
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