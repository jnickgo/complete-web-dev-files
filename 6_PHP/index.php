<!doctype html>
<html>

<head>
    <title>Weather Getter Xpress</title>
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

    html, body {
        height: 100%;
        
    }

    .container {
        background-image: url("background.jpg");
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        padding-top: 150px;
    }

    .center {
        text-align: center;
    }

    .white {
        color: white;
    }

    p {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    button {
        margin-top: 20px;
    }

    #success {
        margin-top: 20px;
        display: none;
    }

    #fail {
        margin-top: 20px;
        display: none;
    }

    #noCity {
        margin-top: 20px;
        display: none;
    }


</style>


</head>

    <body>

    <div class="container">

        <div class="row">

            <div class="col-md-6 col-md-offset-3 center white">

            <h1 class="center">Weather Master 3000</h1>

            <p class="lead center">Enter your city below to get the weather sucka!</p>

            <form>
                <div class="form-group">
                    <input type="text" class="form-control" name="city" id="city" placeholder="Eg. Kansas City, Seattle, Dallas..." />

                </div>

                <button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>

            </form>

            <div id="success" class="alert alert-success">Success!</div>
            <div id="fail" class="alert alert-danger">Not able to find indicated city!</div>
            <div id="noCity" class="alert alert-warning">Please enter a city!</div>
            </div>

        </div>
    </div>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>

    <script>
        $("#findMyWeather").click(function(event) {

                event.preventDefault();
                $(".alert").hide();

            if ($("#city").val()!="") {
            $.get("scraper.php?city="+$("#city").val(), function( data ) {
      
                    if (data=="") {

                        $("#fail").fadeIn();

                    } else {

                        $("#success").html(data).fadeIn();
                    }
                });

            } else {

                $("#noCity").fadeIn();
            }


        });

    </script>

</body>

</html>