
<? include("login.php"); ?>

<html>

<head>

    
    <title>My Little Diary</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">


    <!-- Styling -->
    <style>    
        .navbar-brand {
            font-size: 1.8em;
        }
        
        #topContainer {
            background-image: url("http://www.pixelstalk.net/wp-content/uploads/2016/05/Silver-Blur-Background-Wallpaper.jpg");
            height: 400px;
            width: 100%;
            background-size: cover;
        }
        
        #topRow {
            margin-top: 100px;
            text-align: center;
        }
        .bold {
            font-weight: bold;
        }
        .marginTop {
            margin-top: 25px;
        }
        
        .center {
            text-align: center;
        }
        
        .title {
            margin-top: 100px;
            font-size: 300%;
        }
        
        #footer {
            background-color: #B0D1FB;
            padding-top: 70px;
            width: 100%;
        }
        
        .marginBottom {
            margin-bottom: 30px;
        }
        
        .playStoreImage {
            width: 250px;
        }
    </style>
</head>

    <body>

    <div class="navbar navbar-default navbar-fixed-top">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">     
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">My App</a>
            </div>

            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>


        <div class="container contentContainer" id="topContainer">
            <div class="row">
                
                <div class="col-md-6 col-md-offset-3" id="topRow">
                    
                    <h1>My Awesome App</h1>
                    
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

                </div>
            </div>
        </div>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous">
        </script>

    </body>

</html>