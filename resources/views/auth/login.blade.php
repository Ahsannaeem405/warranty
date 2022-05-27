<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
        <h1>Hello Again!</h1>
        <p>Warrenty</p>
        <form  method="POST" action="{{ route('login') }}">
            @csrf
            <input type="text" name="email" placeholder="Enter Email">
            <input type="password" name="password" placeholder="Password">
            <p class="recover">
            @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </p>
            <button>Sign in</button>
        </form>
        
        <p class="or">
            ----- or continue with -----
        </p>
        <div class="icons">
            <a href="auth/google"><i class="fab fa-google" style="color: red;"></i></a>
            
            <!-- <i class="fab fa-apple"></i> -->
            <a href="auth/facebook"><i class="fab fa-facebook"></i></a>
            
        </div>
        <div class="not-member">
            Not have an account? <a href="{{route('register')}}">Register Now</a>
        </div>
    </div>
</body>

</html>


