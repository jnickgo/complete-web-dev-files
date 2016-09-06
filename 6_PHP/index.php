<!doctype html>
<html>

<head>
    <title>PHP Contact Form</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">

   

    <style>

        .emailForm {
            border-radius: 10px;
            margin-top: 20px
            padding: 10px;
        }
        
        textarea {
            height: 120px;

        }

        form {
            padding-bottom: 20px;
        }

    </style>


</head>

<body>

        <?php

            /*  Pre-populated list of names to check against.   */
            if ($_POST["submit"]) {

                    
                /* If name is empty return error */
                if(!$_POST['name']) {
                    $error="<br />Please enter your name";
                }

                /* If email is empty return error */
                if(!$_POST['email']) {
                    $error.="<br />Please enter your email address";
                }

                /* If comment is empty return error */
                if(!$_POST['comment']) {
                    $error.="<br />Please enter your comment";
                }
   

                /* validate the email address value if it is submitted */
                if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
 	 	 	
 	 	            $error.="<br />Please enter a valid email address";

	 	        }


                if ($error) {

                    $result='<div class="alert alert-danger"><strong>There were error(s)
                    in your form:</strong>'.$error.'</div>';

                            } else {

                            if (mail("nickgover@gmail.com", "Comment from website!", "Name: ".
                            $_POST['name']."

                            Email: ".$_POST['email']."

                            Comment: ".$_POST['comment'])) {

                            $result='<div class="alert alert-success"><strong>Thank
                            you!</strong> I\'ll be in touch.</div>';

                            } else {

                            $result='<div class="alert alert-danger">Sorry, there was
                            an error sending your message. Please try again later.</div>';

                            }

                    }

                }
        ?>


        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 emailForm">
                <h1>My Email Form</h1>
                <?php echo $result; ?>
                <p class="lead">Please get in touch - I'll get back to you as soon as I can.</p>


                <form method="post">
                    <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="comment">Your Comment:</label>
                        <textarea class="form-control" name="comment"><?php echo $_POST['comment']; ?></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit"/>
                </form>
            
                </div>
            </div>
        </div>

     <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

</html>