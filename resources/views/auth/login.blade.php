
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
        <h1>Hello Again!</h1>
        <p>Warrenty</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
            <input type="text" id="email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Enter Email">
            <span class="text-danger"> @error('password') {{ $message }} @enderror </span>
            <input type="password" id="password" name="password" required autocomplete="current-password" placeholder="Password">
            <p class="recover">
                <!-- <a href="#">Recover Password</a> -->
                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Recover Password') }}
                                    </a>
                                @endif
            </p>
            <button type="submit"> {{__("Sign in")}} </button>
        </form>
        
        <p class="or">
            ----- or continue with -----
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <!-- <i class="fab fa-apple"></i> -->
            <i class="fab fa-facebook"></i>
        </div>
        <div class="not-member">
            Not a member? <a href="{{ route('register') }}">Register Now</a>
        </div>
    </div>
</body>

</html>

