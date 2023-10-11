<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presensi | Login</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" sizes="32x32">
    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap5/css/bootstrap.min.css') }}">
    {{-- icon --}}
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    {{-- font-family --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap"
        rel="stylesheet">

    {{-- style css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                    <i class="fa-regular fa-circle-user"></i>
                </div>
                <div class="card card-primary">
                    <div class="card-header d-flex justify-content-center">
                        <h4>Login</h4>
                    </div>

                    <div class="card-body">
                        @error('username')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        @error('email')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group flex-nowrap mb-3">
                                <span class="input-group-text" id="addon-wrapping"><i
                                        class="fa-regular fa-user"></i></span>
                                <input id="login" type="text" class="form-control" name="login"
                                    placeholder="Email / Username" required aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap mb-3">
                                <span class="input-group-text" id="addon-wrapping"><i
                                        class="fa-solid fa-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password"
                                    placeholder="Password" required aria-describedby="addon-wrapping">
                            </div>
                            <div class="d-block">
                                <div class="float-right">
                                    <a href="{{ route('password.request') }}" class="text-small">
                                        Forgot Password?
                                    </a>
                                </div>
                            </div>
                            {{-- <div class="block mt-4 mb-3">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div> --}}

                            <div class="form-button-group mt-3">
                                <button type="submit" class="btn btn-primary w-100">Log in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('plugins/bootstrap5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/fontawesome-free/js/all.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

</body>

</html>
