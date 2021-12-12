<!DOCTYPE html>
<html lang="en">
<head>
    <!--=======Required meta tag========-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>

    <!--============Font awesome css============-->
    <!-- <link rel="stylesheet" href="asset/css/all.min.css"> -->
    <!--   <link rel="stylesheet" href="asset/css/fontawesome.min.css">-->
    <!--==========Bootstrap CSS============-->
    <link rel="stylesheet" href="{{ asset('loginAssets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--=========Toastr csss========  -->
    <!--    <link rel="stylesheet" href="asset/css/toastr.min.css">-->
    <!--======Custom css==========-->
    <link rel="stylesheet" href="asset/css/style.css">

</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow px-5 py-4 mt-4" style="background-color: #efefef;">
                <h3 class="text-center"> Register</h3>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text"  class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="confirmePassword">Confirmed Password</label>
                            <input type="password" class="form-control" id="confirmePassword" name="confirmePassword">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="register" id="register" class="btn btn-success">Register</button>
                        </div>
                        <div class="form-group">
                            <small>Already have an Account?&nbsp;<a href="login.html">Login here</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






<!--============jQuery and Bootstrap js =======-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

<!--==========Font awesome js==================-->
<!--    <script src="asset/js/all.min.js"></script>-->
<!--    <script src="asset/js/fontawesome.min.js"></script>-->
<!--==========Toastr js==================-->
<!--    <script src="asset/js/toastr.min.js"></script>-->

<!--=====Custom js======-->
<script src="asset/js/custom.js"></script>


</body>
</html>
