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
    <!-- LoginInfo CSS -->
    <link rel="stylesheet" type="text/css" href="style/css/home.css">



    <title>P4P Login Page</title>
</head>
<body>

<!-- Function to get the number of checkbox that are checked -->
<script>

    function getNumberOfCheckboxesChecked() {
        return $('input[name="task"]:checked').length;
    }

    function updateGIF() {
        if(getNumberOfCheckboxesChecked()===6){
            document.getElementById("eggImage").src="style/images/eggOpen.gif";
            document.getElementById("taskLeft").innerHTML="CONGRATS, you are a rockstar <3 "
        }else{
            document.getElementById("taskLeft").innerHTML="Keep up the good work, only "+(6-getNumberOfCheckboxesChecked())+" task left!";
        }
    }

</script>

<!-- Navigation Bar -->


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">P4P</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Log off</a>
            </li>
        </ul>
    </div>
</nav>


<!-- Card boxes -->

<br>
<!-- First card -->

<div class="container ml-5 mr-5 mx-auto ">
    <div class="row">
        <div class="col-sm-6">
            <div class="card shadow p-3 mb-5 rounded transparentBackground">
                <div class="card-body">
                    <h5 class="card-title">Task for the semester</h5>
                    <p class="card-text">
                    <script>
                        for (let i = 0; i < 6; i++) {
                            document.write("<div class=\"input-group mb-3\">\n" +
                                "                        <div class=\"input-group-prepend\">\n" +
                                "                            <div class=\"input-group-text\">\n" +
                                "                                <input type=\"checkbox\" name='task' a-label=\"Checkbox for following text input\">\n" +
                                "                            </div>\n" +
                                "                        </div>\n" +
                                "                        <input type=\"text\" class=\"form-control\" aria-label=\"Text input with checkbox\">\n" +
                                "                    </div>" + "<br>");
                        }
                    </script>
                    </p>
                    <button onclick="updateGIF()">Update your egg!</button>
                </div>
            </div>
        </div>

        <!-- Second card -->

        <div class="col-sm-6">
            <div class="card shadow p-3 mb-5 rounded transparentBackground">
                <div class="card-body">
                    <img src="style/images/eggDancing.gif" id="eggImage" style="width: 500px;height: 600px"/>
                </div>
                <p class="mx-auto" id="taskLeft"></p>
            </div>
        </div>
    </div>
</div>

<div class="blackBackground">
    <!-- Footer -->
    <footer class="page-footer font-small">

        <div style="background-color: #007BFF;">
            <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 white">Get connected with us on social networks!</h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">

                        <!-- Facebook -->
                        <a class="fb-ic">
                            <i class="fa fa-facebook white-text mr-4 white"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic">
                            <i class="fa fa-twitter white-text mr-4 white"> </i>
                        </a>
                        <!-- Google +-->
                        <a class="gplus-ic">
                            <i class="fa fa-google-plus white-text mr-4 white"> </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic">
                            <i class="fa fa-linkedin white-text mr-4 white"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fa fa-instagram white-text white"> </i>
                        </a>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold white">P4P</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p class="white">P4P is a web app helping students during their exam period.</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold"><span class="white">Products</span> </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">P1P</a>
                    </p>
                    <p>
                        <a href="#!">P2P</a>
                    </p>
                    <p>
                        <a href="#!">P3P</a>
                    </p>
                    <p>
                        <a href="#!">P4P</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold"><span class="white">Useful links</span></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Class #1</a>
                    </p>
                    <p>
                        <a href="#!">Class #2</a>
                    </p>
                    <p>
                        <a href="#!">Class #3</a>
                    </p>
                    <p>
                        <a href="#!">Help</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold"><span class="white">Contact</span></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-home mr-3" style="color: #f1f1f1"></i><span class="white">North Pole</span></p>
                    <p>
                        <i class="fa fa-envelope mr-3" style="color: #f1f1f1"></i> <span class="white">nicolasnoel@northpole.np</span> </p>
                    <p>
                        <i class="fa fa-phone mr-3" style="color: #f1f1f1"></i> <span class="white">01 234 567 88</span></p>
                    <p>
                        <i class="fa fa-print mr-3" style="color: #f1f1f1"></i> <span class="white">01 234 567 89</span></p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

    </footer>
    <!-- Footer -->
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
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