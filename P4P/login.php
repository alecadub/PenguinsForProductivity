<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Font awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style/css/style.css">
    <!-- import login backend -->
    <script src="js/login.js"></script>

    <title>P4P Sign up Page</title>
</head>
<body>

<div class="container mx-auto" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="mx-auto shadow p-3 mb-5 rounded panel panel-login">
                <div class="panel-heading">
                    <div class="row shadow p-3 mb-5 rounded">
                        <div class="col-xs-6 shadow p-3 mb-5 rounded">
                            <a href="#" class="active" id="login-form-link">Login</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#" id="register-form-link">Register</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" action="https://phpoll.com/login/process" method="post" role="form" style="display: block;">
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
                                    <span class="span-or" style="background-color: rgba(255, 252, 221, 1);">or</span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    <br>
                                    <label>
                                        <input type="checkbox">
                                        Remember me </label>
                                    <a class="pull-right" href="#">Forgot password?</a>
                                </div>
                                <br>
                                <button type="submit" class="btn btn btn-primary">
                                    Log In
                                </button>
                            </form>
                            <form id="register-form" action="https://phpoll.com/register/process" method="post" role="form" style="display: none;">

                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>