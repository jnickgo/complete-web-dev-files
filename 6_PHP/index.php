<?php

    session_start();

    if ($_POST['submit']) {

      // If email is empty
      if (!$_POST['email']) $error.="<br />Please enter your email";
			
            // if email is not valid
            else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br />Please enter a valid email"; 
 		
        // if password is empty
 		if (!$_POST['password']) $error.="<br />Please enter your password";
 		else { 
  
            // if password does not meet length requirements
 			if (strlen($_POST['password'])<8) $error.="<br />Please enter at least 8 characters";
 
 			if(!preg_match('`/[A-Z]/`', $_POST['password'])) $error.="<br />Please include min 1 capital letter";
 		}
			if ($error) echo "There were error(s) in your sign up details:".$error;

			else {

                $link = mysqli_connect("dev.learning.nickgover.com", "justauser", "soUiu0dW", "cwd_diary");

                $query= "SELECT * FROM `users` WHERE email ='".mysqli_real_escape_string($link, $_POST['email'])."'";

                $result = msqli_query($link, $query);

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
?>

    <!-- Sign-up form -->
    <form method="post">
        <!-- reload email on failed login -->
        <input type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']); ?>" />

        <!-- reload password on failed login -->
        <input type="password" name="password" value="<?php echo addslashes($_POST['password']); ?>" />


        <input type="submit" name="submit" value="Sign Up" />

    </form>

    <!-- Log-in form -->
    <form method="post">
        <!-- reload email on failed login -->
        <input type="email" name="loginEmail" id="loginEmail" value="<?php echo addslashes($_POST['email']); ?>" />

        <!-- reload password on failed login -->
        <input type="password" name="loginPassword" value="<?php echo addslashes($_POST['password']); ?>" />


        <input type="submit" name="submit" value="Log In" />

    </form>