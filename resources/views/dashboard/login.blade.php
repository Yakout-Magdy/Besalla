<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>تسجيل الدخول | بسلة</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Cairo', sans-serif;
            direction: rtl;
            text-align: right;
            background: radial-gradient(331.14% 103.23% at 0% 0%, rgba(255, 242, 0, 0.20) 0%, rgba(255, 255, 255, 0.20) 100%), #fff;
        }

        .login-left {
            background: url('{{ asset('adminPanel/img/loginImg.svg') }}') no-repeat center top;
            background-size: cover;
            height: 100%;
        }

        .login-box {
            max-width: 400px;
            width: 100%;
            padding: 2rem;
        }

        .login-box h1 {
            font-weight: 700;
            color: #333;
        }

        .form-control {
            padding: 1rem;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .developed-by {
            font-size: 0.9rem;
            position: absolute;
            bottom: 20px;
            right: 20px;
            color: #888;
        }

        .form-label {
            font-weight: 600;
            color: #333;
        }

        .flag-prefix {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1rem;
        }

        .phone-group input {
            padding-left: 3.5rem;
        }

        .form-control {
            height: 56px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 500;
            color: #333;
            border: 1px solid #ccc;
            /* enough space for the flag/prefix */
            box-shadow: none;
            transition: border-color 0.2s;
        }

        .form-control:focus {
            border-color: #ffcc00;
            box-shadow: none;
        }

        .phone-prefix {
            position: absolute;
            top: 55%;
            left: 16px;
            font-weight: 600;
            color: #333;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .phone-group {
            position: relative;
        }

        .btn-yellow {
            height: 56px;
            font-size: 16px;
            border-radius: 12px;
            font-weight: bold;
            background-color: #FFF200;
            color: #333;
            border: none;
        }

        .btn-yellow:hover {
            background-color: #333;
            color: #FFF200;
        }
    </style>
</head>

<body class="hold-transition">

    <div class="container-fluid vh-100">
        <div class="row h-100">
            <!-- Left side - Image -->
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="login-box">
                    <div class="text-right mb-4">
                        <h1>تسجيل الدخول</h1>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0 pl-3">
                                @foreach ($errors->all() as $error)
                                    <li class="text-right">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('dashboard.login') }}" method="POST">
                        @csrf

                        <!-- email Field -->
                        <div class="form-group phone-group mb-4">
                            <label for="email" class="form-label mb-2"> البريد الالكتروني</label>
                            <input type="text" id="email" name="email" class="form-control text-right"
                                placeholder="email">
                        </div>


                        <!-- Password Field -->
                        <div class="form-group mb-4">
                            <label for="password" class="form-label mb-2">كلمة المرور</label>
                            <input type="password" id="password" name="password" class="form-control text-right"
                                placeholder="************">
                        </div>


                        <!-- Submit -->
                        <div class="form-group mb-4">
                            <button type="submit" class="btn btn-yellow btn-block">تسجيل الدخول</button>
                        </div>
                    </form>

                    <div class="developed-by">
                        طور بواسطة:
                        <a href="https://bdaiat.com" target="_blank">
                            <img src="{{ asset('adminPanel/img/bdaiatLogo.svg') }}" alt="bdaiat"
                                style="height: 30px;">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right side - Login Form -->
            <div class="col-md-6 d-none d-md-block login-left"></div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>

</html>
