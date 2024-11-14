<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('login-register/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('login-register/css/style.css') }}">
</head>
<body>
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Daftar</h2>
                        <form method="POST" action="{{ route('registeruser') }}" enctype="multipart/form-data" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Nama Lengkap" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Saya menyetujui  <a href="/snk" class="term-service">Kebijakan Privasi</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Daftar"/>
                            </div>
                        </form>

                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ asset('login-register/images/signup-image.jpg') }}" alt="sing up image"></figure>
                        <a href="/login" class="signup-image-link">Sudah Punya Akun?</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="{{ asset('login-register/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('login-register/js/main.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
