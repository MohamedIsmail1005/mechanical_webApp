<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="user/assets/login/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(user/assets/images/car.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">

                    <br><br><br>
                    <a href="{{url('/')}}" class="logo">
                        <img src="user/assets/images/MLOGO.png" style="width: 200px;margin:-30px" href="#top">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input  id="email" class="form-control" type="email" name="email"
                                    :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="form-control" type="password" name="password"
                                    required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label for="remember_me" class="checkbox-wrap checkbox-primary">
                                        <input id="remember_me" type="checkbox" name="remember" checked>
                                        <span class="checkmark">{{ __('Remember me') }}</span>
                                    </label>
                                </div><br>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="w-50 text-md-right" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <x-primary-button type="submit" class="form-control btn btn-primary submit px-3">
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Or Register &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="{{ url('register') }}" class="form-control btn btn-primary submit px-3">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="user/assets/login/js/jquery.min.js"></script>
    <script src="user/assets/login/js/popper.js"></script>
    <script src="user/assets/login/js/bootstrap.min.js"></script>
    <script src="user/assets/login/js/main.js"></script>

</body>

</html>
