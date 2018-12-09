<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style/css/login.css">

    <title>P4P Login Page</title>
</head>
<body>

<div class="card mx-auto shadow p-3 mb-5 rounded">
    <div class="card-body">
        <div class="container">
            <div class="row">

                <div class="main">

                    <h3>Please Log In, or <a href="signUp.php">Sign Up</a></h3>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <a href="#" class="btn btn-lg btn-primary btn-block">Facebook</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <a href="#" class="btn btn-lg btn-info btn-block">Google</a>
                        </div>
                    </div>
                    <div class="login-or">
                        <hr class="hr-or">
                        <span class="span-or">or</span>
                    </div>

                    <form role="form">
                        <div class="form-group">
                            <label for="inputUsernameEmail">Username or email</label>
                            <input type="text" class="form-control" id="inputUsernameEmail">
                        </div>
                        <div class="form-group">
                            <a class="pull-right" href="#">Forgot password?</a>
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                        <div class="checkbox pull-right">
                            <label>
                                <input type="checkbox">
                                Remember me </label>
                        </div>
                        <button type="submit" class="btn btn btn-primary">
                            Log In
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>