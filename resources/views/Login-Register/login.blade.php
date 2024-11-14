<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet"
        href="{{ asset('login-register/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('login-register/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-noty/3.1.0/jquery.noty.css" rel="stylesheet">

</head>

<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset('login-register/images/signin-image.jpg') }}" alt="sign up image">
                        </figure>
                        <a href="/register" class="signup-image-link">Belum Punya Akun?</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form action="{{ route('actionlogin') }}" method="POST" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email"  placeholder="Email" />
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password"placeholder="Password" />
                                @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Ingat
                                    Saya</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit"
                                    value="Log in" />
                            </div>
                        </form>
                        @if ($errors->any())
                            <div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-red">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="social-login">
                            <span class="social-label">Login menggunakan</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('login-register/vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-noty/3.1.0/jquery.noty.min.js"></script>


    <!-- Main JS -->
    <script src="{{ asset('login-register/js/main.js') }}"></script>
    @if(session('success'))
    @if(session('success'))
    <script>
        $.notify({
            icon: 'icon-bell',
            title: 'Login Berhasil',
            message: '{{ session('success') }}',
        }, {
            type: 'success',
            placement: {
                from: "top",
                align: "right"
            },
            time: 1000,
        });
    </script>
@endif

@if(session('error'))
    <script>
        $.notify({
            icon: 'icon-bell',
            title: 'Login Gagal',
            message: '{{ session('error') }}',
        }, {
            type: 'danger',
            placement: {
                from: "top",
                align: "right"
            },
            time: 1000,
        });
    </script>
@endif

@endif

</body>

</html>
