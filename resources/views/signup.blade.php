<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Register</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Register to IN+</h3>
            <p>Create account to see it in action.</p>
            <form class="m-t" role="form" method = "post" action="{{URL::route('signup')}}">
                <div class="form-group">
                    <input type="text" class="form-control" name = "name" placeholder="Name" required="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name = "email" placeholder="Email" required="">
                </div> 
                <div class="form-group">
                    <input type="text" class="form-control" name = "contact" placeholder="Contact Number" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name = "password" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name = "password_confirmation" placeholder="Confirm Password" required="">
                </div>
               
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{URL::route('login')}}">Login</a>
                <p class="text-muted text-center"><small>Admin Login?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{URL::route('adminlogin')}}">Admin Login</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
