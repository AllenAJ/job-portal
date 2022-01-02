<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Bootstrap Theme</title>
</head>

<body>
    <!-- SIMPLE NAVBAR -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
        <div class="container">
            <img class="ml-5 m" src="img/logo.png" height="30px" width="110px"></img>
            <ul class="navbar-nav mr-5">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Find a Job</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Recruit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Find a Job</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <!---Simple Login and Register-->
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="h2">Welcome to Job Portal</h1>
            <hr style="height: 3px;border:none;color:#333;" width="5%" color="black">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus pariatur dolores commodi nemo dolor
                hic
                tempore expedita molestias, sit amet aut voluptatem quae at incidunt. Repellendus nemo eaque dolor
                corporis?
            </p>
        </div>
    </div>
    <div class="container h-100 mt-5">
        <div class="row justify-content-md-center h-100">
            <!---Simple Login-->
            <div class="column p-5" style="max-width: 440px;">
                <div class="card-wrapper">
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Login</h4>
                            <form class="my-login-validation">
                                <!-- Email Input -->
                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <input id="email1" type="email" class="form-control" name="email">
                                </div>
                                <!-- Password Input -->
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div style="position:relative">
                                        <input id="password1" type="password" class="form-control" name="password"
                                            style="padding-right: 60px;">
                                    </div>
                                </div>
                                <!-- Login Btn -->
                                <div class="form-group m-0">
                                    <button class="btn btn-primary btn-block"
                                    type="button" onclick="login()">Login</button>
                                </div>
                                <!-- Login with Google Btn -->
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-primary btn-block">Sign in with Google</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!---Simple Register-->
            <div class="column p-5" style="max-width: 440px;">
                <div class="card-wrapper">
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Register</h4>
                            <form class="my-login-validation" >
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="email">First name</label>
                                            <input id="fname" type="text" class="form-control" placeholder="First name">
                                        </div>
                                        <div class="col">
                                            <label for="email">Second name</label>
                                            <input id="lname" type="text" class="form-control" placeholder="Last name">
                                        </div>
                                    </div>
                                </div>
                                <!-- Email Input -->
                                <div class="form-group">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email2" type="email" class="form-control" name="email" value="" required="" autofocus="">
                                </div>
                                <!-- Password Input -->
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div style="position:relative">
                                    <input id="password2" type="password" class="form-control" name="password" style="padding-right: 60px;">
                                    </div>
                                </div>
                                <!-- PhoneNo Input -->
                                <div class="form-group">
                                    <label for="ph_no">Phone Number</label>
                                    <input id="ph_no" type="number" class="form-control" name="ph_no" value="" required="" autofocus="">
                                </div>
                                
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="radio" name="usertype" value=" Recruiter" checked />&nbsp;  Recruiter &nbsp; 
                                        <input type="radio" name="usertype" value="Job Seeker" />&nbsp;  Job Seeker &nbsp; 
                                    </div>
                                </div>


                                <div class="form-group mt-3">
                                    <button type="button" onclick="register()" class="btn btn-primary btn-block">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-database.js"></script>
    <script src="server.js"></script>
    <script>
        firebase.auth().onAuthStateChanged(function(user){
            if(user){
                window.location.href = "settings.html";
            }
        });
    </script>
    <!-- TODO: Add SDKs for Firebase products that you want to use
             https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-analytics.js"></script>

</body>

</html>