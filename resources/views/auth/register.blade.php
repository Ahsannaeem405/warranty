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
        <h1>Register here</h1>
        <p></p>
        <form  method="POST" action="{{ route('register') }}">
            @csrf
            <span>@error("name") {{$message}} @enderror</span>
            <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Full name"><br>
            <span>@error("email") {{$message}} @enderror</span>
            <input type="email" name="email" :value="old('email')" required placeholder="Email"><br>
            <span>@error("address") {{$message}} @enderror</span>
            <input type="text" name="address" placeholder="Address"><br>
            <span>@error("mobile") {{$message}} @enderror</span>
            <input type="text" name="mobile" placeholder="Mobile #"><br>
            <span>@error("password") {{$message}} @enderror</span>
            <input type="password" name="password" required autocomplete="new-password" placeholder="Password"><br>
            <span>@error("password_confirmation") {{$message}} @enderror</span>
            <input type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"><br>

            <button>Sign Up</button>
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
            Already registered? <a href="{{route('login')}}">Sign in</a>
        </div>
    </div>
</body>

</html>
