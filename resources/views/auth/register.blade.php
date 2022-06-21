@extends('front-end.master')
@section('content')
    <title>Instagram</title>
    <!-- FAVIVON -->
    <link rel="shortcut icon" href="./images/favicon.png" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <body>

        <div class="container">
            <div class="main-container">
                <div class="main-content">
                    <div class="slide-container" style="background-image: url( assets/images/backgroudlogin.png )">
                        <div class="slide-content" id="slide-content">
                            <img src="{{ asset('assets/images/1.png') }}" alt="slide image" class="active">
                            <img src="{{ asset('assets/images/2.png') }}" alt="slide image">
                            <img src="{{ asset('assets/images/3.png') }}" alt="slide image">
                            <img src="{{ asset('assets/images/4.png') }}" alt="slide image">
                        </div>
                    </div>
                    <div class="form-container">
                        <div class="form-content box">
                            <div class="logo">
                                <img src="{{ asset('assets/images/logo-light.png') }}" alt="Instagram logo"
                                    class="logo-light">
                                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="Instagram logo"
                                    class="logo-dark">
                            </div>
                            <div class="signin-form" id="signin-form">
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="animate-input">
                                            <span>
                                                Email
                                            </span>
                                            <input type="email" name="email" :value="old('email')" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="animate-input">
                                            <span>
                                                Username
                                            </span>
                                            <input type="text" name="name" :value="old('name') required autofocus">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="animate-input">
                                            <span>
                                                Password
                                            </span>
                                            <input type="password" name="password" required autocomplete="new-password">
                                            {{-- <button>Show</button> --}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="animate-input">
                                            <span>
                                                Confirm Password
                                            </span>
                                            <input type="password" name="password_confirmation" required>
                                            {{-- <button>Show</button> --}}
                                        </div>
                                    </div>
                                    <div class="btn-group ">
                                        <button type="submit" class="btn btn-login_one btn-primary" id="signin-btn">
                                            Sign In
                                        </button>
                                    </div>
                                </form>

                                <div class="divine">
                                    <div></div>
                                    <div>OR</div>
                                    <div></div>
                                </div>
                                <div class="btn-group">
                                    <button class="btn-fb">
                                        <img src="{{ asset('assets/images/facebook-icon.png') }}" alt="">
                                        <span>Log in with Facebook</span>
                                    </button>
                                </div>
                                <a href="#" class="forgot-pw">Forgot password?</a>
                            </div>
                        </div>
                        <div class="box goto">
                            <p>
                                Don't have an account?
                                <a href="{{ route('login') }}">Sign up</a>
                            </p>
                        </div>

                        <div class="app-download">
                            <p>Get the app.</p>
                            <div class="store-link">
                                <a href="#">
                                    <img src="{{ asset('assets/images/app-store.png') }}" alt="app store">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/images/gg-play.png') }}" alt="google play">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- APP JS -->
        <script src="./app.js"></script>

    </body>

    </html>
@endsection
