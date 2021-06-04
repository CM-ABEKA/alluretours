<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0c4b9907e3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <title>Allure - Password Reset</title>
</head>

<body style="background-image: url(undraw_campfire_s6y4.svg); background-color: #000">

    <div class="row login text-center">
        <div class="col-lg-4 mx-auto">
            <div class="card  mt-5  p-2">
                <h3>Reset password.</h3>

                <div class="card-body">
                    <form action="mailer.php" method="post">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-envelop fa-2x"></i>
                                </span>
                            </div>
                            <input type="email" required class="form-control" name="email" placeholder="Enter email">
                        </div>


                        <button class="btn btn-success mb-3" name="reset">Reset </button>

                    </form>
                </div>
            </div>
        </div>
    </div>



</body>

</html>