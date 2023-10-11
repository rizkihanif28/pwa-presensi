<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name') }}</title>

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
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('css')
</head>

<body style="background-color:#ffff;">
    <div id="app">
        <div class="main-wrapper">
            {{-- <div class="navbar-bg"></div> --}}
            {{-- header --}}
            {{-- @include('layouts.header') --}}
            {{-- sidebar --}}
            @include('layouts.bottom-menu')

            <!-- Main Content -->
            <div class="main-content" style="min-height:276px">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- Content Title --}}
                        <h1 class="m-0">@yield('content-title')</h1>
                    </div>
                </div>
                <section class="content-section">
                    {{-- Main Content Body --}}
                    @yield('content')
                </section>
            </div>
        </div>
        {{-- <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; {{ date('Y') }} <div class="bullet"></div> Created With <a
                    href="https://www.linkedin.com/in/rizki-hanif/" target="_blank">Mohamad Rizki
                    Hanif</a>
            </div>
            <div class="footer-right">
                Presensi Pegawai
            </div>
        </footer> --}}
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="{{ asset('plugins/bootstrap5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/fontawesome-free/js/all.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    @stack('customJS')

</body>

</html>
