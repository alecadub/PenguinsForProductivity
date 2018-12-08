<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- LoginInfo CSS -->
    <link rel="stylesheet" type="text/css" href="style/css/loginInfo.css">

    <title>P4P Login Page</title>
</head>
<body>

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
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <h5 class="card-title">Task for the semester</h5>
                    <p class="card-text">
                    <script>
                        for (var i = 0; i < 6; i++) {
                            document.write("<div class=\"input-group mb-3\">\n" +
                                "                        <div class=\"input-group-prepend\">\n" +
                                "                            <div class=\"input-group-text\">\n" +
                                "                                <input type=\"checkbox\" aria-label=\"Checkbox for following text input\">\n" +
                                "                            </div>\n" +
                                "                        </div>\n" +
                                "                        <input type=\"text\" class=\"form-control\" aria-label=\"Text input with checkbox\">\n" +
                                "                    </div>" + "<br>");
                        }
                    </script>
                    </p>
                    <a href="#" class="btn btn-primary">Update penguin</a>
                </div>
            </div>
        </div>

        <!-- Second card -->

        <div class="col-sm-6">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Print Checkbox and text form -->
<script>
    function printCheckboxes() {
        var i;
        var text = "";
        for (i = 0; i < 5; i++) {
            text += "hollla" + "<br>"
        }
        return text;
    }
</script>

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