<!DOCTYPE html>
<html lang="en">
<head>
    <!--=======Required meta tag========-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!--============Font awesome css============-->
    <!-- <link rel="stylesheet" href="asset/css/all.min.css"> -->
    <!--   <link rel="stylesheet" href="asset/css/fontawesome.min.css">-->
    <!--==========Bootstrap CSS============-->
    <link rel="stylesheet" href="{{ asset('loginAssets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <!--=========Toastr csss========  -->
    <link rel="stylesheet" href="{{ asset('loginAssets/css/toastr.min.css') }}">
    <!--======Custom css==========-->
{{--    <link rel="stylesheet" href="asset/css/style.css">--}}

</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow px-5 py-4 mt-4" style="background-color: #efefef;">
                <h3 class="text-center">Admin Login</h3>
                <div class="card-body">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <a href=""><small>Forgot password?</small></a>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="loginBtn" id="loginBtn" class="btn btn-success">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--============jQuery and Bootstrap js =======-->
<script src="{{ asset('loginAssets/js/jquery-3.5.1.min.js') }}"></script>
{{--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<!--==========Font awesome js==================-->
<!--    <script src="asset/js/all.min.js"></script>-->
<!--    <script src="asset/js/fontawesome.min.js"></script>-->
<!--==========Toastr js==================-->
<script src="{{ asset('loginAssets/js/toastr.min.js') }}"></script>
<script src="{{ asset('loginAssets/js/axios.min.js') }}"></script>

<!--=====Custom js======-->
{{--<script src="{{ asset('loginAssets/js/custom.js') }}"></script>--}}

<script>
    $('#loginBtn').on('click', function (){
        let email = $('#email').val();
        let password = $('#password').val();

        if (email.length === 0){
            toastr.error('Email required!');
        }else if(password.length === 0){
            toastr.error('Password required!');
        }else {
            let formData = new FormData;
            formData.append('email', email);
            formData.append('password', password);

            let url = '/adminLoginCheck';
            let config = {
                headers:{
                    'Content-Type': 'application/json'
                }
            }

            axios.post(url,formData,config).then(res =>{

                if (res.status === 200){
                    if (res.data === 0){
                        toastr.error('Incorrect email or password!');
                    }else {
                        // window.open('/');
                        window.location = '/'
                        toastr.success('Login Success');
                    }
                }else {
                    toastr.error('Response not found!');
                }
            }).catch(error => {
                toastr.error('Something went wrong!')
            })

        }
    })
</script>
</body>
</html>
