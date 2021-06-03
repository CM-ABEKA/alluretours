<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0c4b9907e3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <title>Allure - login</title>
</head>

<body style="background-image: url(undraw_campfire_s6y4.svg); background-color: #000">

    <div class="row login text-center">
        <div class="col-lg-4 mx-auto">
            <div class="card  mt-5  p-2">
                <div class="card-title text-center">
                    <i class="fa fa-user-circle fa-6x"></i>
                </div>
                <div class="card-body">
                    <form action="user.php" method="post">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user fa-2x"></i>
                                </span>
                            </div>
                            <input type="text" required class="form-control" name="user"
                                placeholder="Enter user name or email">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-lock fa-2x"></i>
                                </span>
                            </div>
                            <input type="password" required class="form-control" name="password" placeholder="Password">
                        </div>
                        <button class="btn btn-success mb-3" name="login">Login Now</button>
                        <p><a href="#">Forgot Password?</a></p>
                        <a href="guest.php" class="text-center" style="text-decoration:none; ">
                            <p class=" text-danger"> Continue as guest?
                                <i class="fas fa-external-link-alt"></i>
                            </p>
                        </a> or <a href="signup.php">sign up <i class="fas fa-external-link-alt"></i></a>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>

</html>