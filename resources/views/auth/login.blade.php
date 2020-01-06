<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Modern Login Form Responsive Widget Template :: w3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="Modern Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="{{asset('storage/login-form/css/style.css')}}" type="text/css" media="all"/>
    <!-- Style-CSS -->
    <link rel="stylesheet" href="{{asset('storage/login-form/css/font-awesome.css')}}"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Snippet" rel="stylesheet"><!--online fonts-->
    <!-- //web-fonts -->
</head>
<body>
<div data-vide-bg="{{asset('storage/login-form/video/keyboard')}}">
    <div class="main-container">
        <!--header-->
        <div class="header-w3l">
            <h1>Funny Quiz</h1>
        </div>
        <!--//header-->
        <!--main-->
        <div class="main-content-agile">
            <div class="w3ls-pro">
                <h2>Login Now</h2>
            </div>
            <div class="sub-main-w3ls">
                <form action="{{ route('login') }}" method="POST">
                @csrf
                <!--email-->
                    <input id="email" type="email" placeholder="Enter your Email"
                           class="form-control @error('email') is-invalid @enderror" name="email"
                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                    @enderror
                    <span class="icon1"><span toggle="#password-field" class="fa fa-envelope" aria-hidden="true"></span></span>

                    <!--password-->
                    <input id="password" type="password" placeholder="Enter your Password"
                           class="form-control @error('password') is-invalid @enderror"
                           name="password"
                           required autocomplete="current-password">
                    <span class="icon2"><i class="fa fa-fw fa-eye field_icon toggle-password"
                                           aria-hidden="true"></i></span>

                    <div class="checkbox-w3">
                        <span class="check-w3"> <input class="form-check-input" type="checkbox" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember me') }}
                        </span>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <div class="clear"></div>
                    </div>
                   <div class="m-5">
                       <p style="color:burlywood;">
                           If you do not already have an account, please
                           <a style="color: aqua" href="{{ route('register') }}">{{ __('Register') }}</a>
                           now.
                       </p>
                   </div>
                    <br>
                    <div class="social-icons">
                        <ul>
                            <li><a href="redirect/facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <input type="submit" value="">
                </form>

            </div>

        </div>
        <!--//main-->
        <!--footer-->
        <div class="footer">

        </div>
        <!--//footer-->
    </div>
</div>
<!-- js -->
<script type="text/javascript" src="{{asset('storage/login-form/js/jquery-2.1.4.min.js')}}"></script><!--common-js-->
<script src="{{asset('storage/login-form/js/jquery.vide.min.js')}}"></script><!--video-js-->
<!-- //js -->

<script>
    $(document).on('click', '.toggle-password', function () {

        $(this).toggleClass("fa-eye fa-eye-slash");

        let input = $("#password");
        input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
    });
</script>
</body>
</html>

