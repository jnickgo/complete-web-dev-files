<?php

    session_start();

    // include the db connection functions.
    include("connection.php");

    // Sign-up Script
    if ($_POST['submit']=="Sign Up") {

        // If email is empty
        if (!$_POST['email']) $error.="<br />Please enter your email";
			
            // if email is not valid
            else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br />Please enter a valid email"; 
 		
        // if password is empty
 		if (!$_POST['password']) $error.="<br />Please enter your password";
 		else { 
  
            // if password does not meet length requirements
 			if (strlen($_POST['password'])<8) $error.="<br />Please enter at least 8 characters";
 
 			if(!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Please include min 1 capital letter";
 		}
			if ($error) echo "There were error(s) in your sign up details:".$error;

			else {

                $query = "SELECT * FROM `users` WHERE email ='".mysqli_real_escape_string($link, $_POST['email'])."'";

                $result = mysqli_query($link, $query);

                $results = mysqli_num_rows($result);
            
            if ($results) echo "That email address is already registered.  Do you want to log in?";
            else {

                $query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
                mysqli_query($link, $query);

                echo "You've been signed up!";

                $_SESSION['id']=mysqli_insert_id($link);

                print_r($_SESSION);

                // Redirect to logged in page
           }
        }
     }

     // Log-in Script
     if ($_POST['Log in']=="Log In") {

         $query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['loginEmail'])."' AND password='".md5(md5($_POST['loginEmail']).$_POST['loginPassword'])."' LIMIT 1";

         $result = mysqli_query($link, $query);

         $row = mysqli_fetch_aray($result);

         if ($row) {
             
             $_SESSION['id']=$row['id'];

             print_r($_SESSION);
             // Redirect to Logged in page
         } else {

             echo "We could not find a user with that email and password combination.  Please try again.";
         }

     }

?>