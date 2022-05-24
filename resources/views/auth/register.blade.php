<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
        <h1>Welcome!</h1>
        <p>Warrenty</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <span class="text-danger"> @error('name') {{$message}} @enderror </span>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">
           <br> <span class="text-danger"> @error('mobile') {{$message}} @enderror </span>
            <input type="number" id="mobile" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus placeholder="Mobile #">
            <br><span class="text-danger"class="text-danger"> @error('address') {{$message}} @enderror </span>
            <input type="text" id="address" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus placeholder="Address">
            <br><span class="text-danger"> @error('email') {{$message}} @enderror </span>
            <input type="email" id="email"  name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
            <br><span class="text-danger"> @error('password') {{$message}} @enderror </span>
            <input type="password" id="password" type="password" id="password" class="" name="password" required autocomplete="new-password" placeholder="Password">
            <button> {{__('Register')}} </button>
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
            Already have account? <a href="{{ route('login') }}"> {{__("Login Now")}} </a>
        </div>
    </div>
</body>

</html>
