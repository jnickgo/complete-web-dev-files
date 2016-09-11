
<? include("login.php"); ?>

<html>

<head>

    <title>PHP Login Form</title>
    <title>My Little Diary</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">


</head>

    <body>
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


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous">
        </script>

    </body>

</html>