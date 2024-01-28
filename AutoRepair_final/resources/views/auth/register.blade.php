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
                    <a href="{{ url('/') }}" class="logo">
                        <img src="user/assets/images/MLOGO.png" style="width: 200px;margin:-80px" href="#top">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Create Your account</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="form-control" type="text" name="name"
                                    :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input   id="email" class="form-control" type="email" name="email"
                                    :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <x-input-label for="user_type" name="user_type" :value="__('User Type')" />
                                <select class="form-control" name="user_type" style="width: 100%">
                                    <option style="color:black" value="0">Customer</option>
                                    <option style="color:black" value="1">Supplier</option>
                                </select>
                            </div>
                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="form-control" type="password" name="password"
                                    required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" class="form-control" type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="flex items-center justify-end mt-4" style="color: #dcdde1">
                                <a class="w-50 text-md-right" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                                <x-primary-button class="form-control btn btn-primary submit px-3">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>
                        </form>
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
