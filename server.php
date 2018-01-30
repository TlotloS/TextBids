<?php 

            //connection variables
            $host = 'localhost' ;
            $username = 'root';
            $passwd = '';
            $dbname = 'textbidsdb';

            //create mysql connection
             $mysqli = new mysqli($host,$username,$passwd);
             if ($mysqli->connect_errno)
             {
                printf("Connection failed: %s\n", $mysqli->connect_error);
                die();
             }
             //validation variables
             $username ='';
             $password ='';
             $query ='';
             $errors = array();
             
	session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'textbidsdb');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['Name']);
                $surname = mysqli_real_escape_string($db, $_POST['Surname']);
                $StudentNo = mysqli_real_escape_string($db, $_POST['StudentNo']);
                $Faculty = mysqli_real_escape_string($db, $_POST['selFaculty']);
                $Degree = mysqli_real_escape_string($db, $_POST['Degree']);
                $CellNum = mysqli_real_escape_string($db, $_POST['CellNo']);
                $YOS = mysqli_real_escape_string($db, $_POST['selYOS']);
		$email = mysqli_real_escape_string($db, $_POST['InputEmail1']);
		$password_1 = (mysqli_real_escape_string($db, $_POST['Password']));
		$password_2 = (mysqli_real_escape_string($db, $_POST['ConfirmPassword']));

		// form validation: ensure that the form is correctly filled
		/*
                if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

                 *    validation is already performed in html code by required argument              
                 */
                
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
        
                        
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
                        print_r( $_POST );
                    
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO tblusers(Name,Surname,Email,Cell_Num,Std_num,Faculty,Degree,YOS,Password)
                                              VALUES('$name', '$surname', '$email','$CellNum','$StudentNo','$Faculty','$Degree','$YOS','$password')";
			
                        mysqli_query($db, $query);

			$_SESSION['username'] = $name;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

	/*	if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
        */
		if (count($errors) == 0) {
                    
                        $password = md5($password);
                        $email = strtolower($email); // convert email to lowercase to prevent confusion
			$query = "SELECT * FROM `tblusers` WHERE lower(Email)= '$email' AND password='$password'";
			$results = mysqli_query($db, $query);
                        
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $email;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>