<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!--bootstrap 5 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper text-center shadow">
        <h1 class="fs-4 mb-4">Login here</h1>
        <form  method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <input type="email" name="email" value="{{ old('email') }}"
                    autofocus autocomplete="email" placeholder="Enter Email"
                    class="@error('email') is-invalid @enderror"><br>
                @error('email')
                <span class="invalid feedback regis-error-message" role="alert">
                    <strong>{{ $message }}.</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <input type="password" name="password" value="{{ old('password') }}"
                    autofocus autocomplete="password" placeholder="Enter Password"
                    class="@error('password') is-invalid @enderror"><br>
                @error('password')
                <span class="invalid feedback regis-error-message" role="alert">
                    <strong>{{ $message }}.</strong>
                </span>
                @enderror
            </div>
            {{-- <input type="text" name="email" placeholder="Enter Email">
            <input type="password" name="password" placeholder="Password"> --}}
            <p class="recover mb-4">
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

    <!-- bootstrap 5 cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


