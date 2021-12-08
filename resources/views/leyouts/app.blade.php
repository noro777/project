<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        {{-- <a href="{{route('student.create')}}" class="btn btn-block btn-primary">student</a>
        <a href="{{route('guest.create')}}" class="btn btn-block btn-primary">guest</a>
        <a href="{{route('lecturer.create')}}" class="btn btn-block btn-primary">lecturer</a>
        <a href="{{route('employer.create')}}" class="btn btn-block btn-primary">employer</a> --}}
        {{-- <a href="{{route('institution.create')}}" class="btn btn-block btn-primary">institution</a>
        <a href="{{route('partner.create')}}" class="btn btn-block btn-primary">partner</a> --}}
        <div class="register">
            <div class="logo">
                <img src="{{ asset('images/logoGit.png') }}" class="logoImg">
                <img src="{{ asset('images/GlobalIt.png') }}" class="logoText">
            </div>
            <button type="submit" class="vector"><img src="vector.png"></button>
            <div id="sub">
                <button id="reg"><p style="margin-top: 0em;">Գրանցվել</p></button>
                <button id="sign">Մուտք</button>
            </div>
            <p id="reg2p">Գրանցվել որպես՝</p>
            <div id="divForm">

                <button type="submit" onclick="window.location.href='{{ route('student.create') }}'"  class="buttonForm"><img class="img1" src="{{ asset('') }}us.png"><p class="pForm">Ուսանող</p></button>
                <button type="submit"   class="buttonForm"><img class="img2" src="{{ asset('images/sch.png') }}"><p class="pForm">Ուս․ հաստատություն</p></button>
                <button type="submit" onclick="window.location.href='{{ route('lecturer.create') }}'"  class="buttonForm"><img class="img3" src="{{ asset('images/teach.png') }}"><p class="pForm">Դասախոս</p></button>
                <button type="submit" class="buttonForm"><img class="img4" src="{{ asset('images/fr.png') }}"><p class="pForm">Ֆրիլանսեր/Գործատու</p></button>
                <button type="submit" onclick="window.location.href='{{ route('guest.create') }}'"  class="buttonForm"><img class="img5" src="{{ asset('images/gh.png') }}"><p class="pForm">Հյուր</p></button>
                <button type="submit" onclick="window.location.href='{{ route('employer.create') }}'"  class="buttonForm"><img class="img6" src="{{ asset('images/kol.png') }}"><p class="pForm">Գործընկեր</p></button>

            </div>
        </div>

    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
