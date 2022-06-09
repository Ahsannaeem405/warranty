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
        <h1 class="fs-4 mb-4">Register here</h1>
        <p></p>
        <form  method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <input type="text" name="name" value="{{ old('name') }}"
                    autofocus autocomplete="name" placeholder="Full Name"
                    class="@error('name') is-invalid @enderror"><br>
                @error('name')
                <span class="invalid feedback regis-error-message" role="alert">
                    <strong>{{ $message }}.</strong>
                </span>
                @enderror
            </div>

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
                <textarea name="address" autofocus autocomplete="address" placeholder="Enter Address"
                class="@error('address') is-invalid @enderror border-light p-3" value="{{ old('address') }}"
                cols="29" rows="5" style="background-color: #dfe9f5; border-radius: 10px;"></textarea><br>
                @error('address')
                <span class="invalid feedback regis-error-message" role="alert">
                    <strong>{{ $message }}.</strong>
                </span>
                @enderror
            </div>

{{--            <div class="mb-3">--}}
{{--                <input type="text" name="mobile" value="{{ old('mobile') }}" --}}
{{--                    autofocus autocomplete="mobile" placeholder="Enter Mobile Number" --}}
{{--                    class="@error('mobile') is-invalid @enderror" --}}
{{--                    oninput="this.value = this.value.replace(/[^0-9.]/g, '');--}}
{{--                                   this.value = this.value.replace(/(\..*)\./g, '$1');"><br>--}}
{{--                @error('mobile')--}}
{{--                <span class="invalid feedback regis-error-message" role="alert">--}}
{{--                    <strong>{{ $message }}.</strong>--}}
{{--                </span>--}}
{{--                @enderror--}}
{{--            </div>--}}

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

            <div class="mb-4">
                <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"
                    autofocus autocomplete="password_confirmation" placeholder="Confirm Password"
                    class="@error('password_confirmation') is-invalid @enderror"><br>
                @error('password_confirmation')
                <span class="invalid feedback regis-error-message" role="alert">
                    <strong>{{ $message }}.</strong>
                </span>
                @enderror
            </div>
            {{-- <span>@error("email") {{$message}} @enderror</span> --}}
            {{-- <input type="email" name="email" :value="old('email')"  placeholder="Email"><br>
            <span>@error("address") {{$message}} @enderror</span>
            <input type="text" name="address" placeholder="Address"><br>
            <span>@error("mobile") {{$message}} @enderror</span>
            <input type="text" name="mobile" placeholder="Mobile #"><br>
            <span>@error("password") {{$message}} @enderror</span>
            <input type="password" name="password"  autocomplete="new-password" placeholder="Password"><br>
            <span>@error("password_confirmation") {{$message}} @enderror</span>
            <input type="password" name="password_confirmation"  autocomplete="new-password" placeholder="Confirm Password"><br> --}}

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

<!-- bootstrap 5 cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
