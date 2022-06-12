<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>

    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!--bootstrap 5 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="wrapper text-center shadow">
    <h1 class="fs-4 mb-4">Reset Password</h1>
    <form  method="POST" action="{{ route('password.email') }}">
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

         <button type="submit" class="btn btn-primary">
                    {{ __('Send Password Reset Link') }}
                </button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

