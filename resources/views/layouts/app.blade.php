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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>
        body{
            background-color: #1d1d1d !important;
            font-weight: bold !important;
        }
        .card{
            margin-top: 30px !important;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 5px 5px 20px #151515,
                        -4px -4px 10px rgba(255, 255, 255, 0.1);
            border:none;
            background: none;
            justify-content: center;
            justify-items: center;
            margin: auto;
            

        }
        
        .ui {
            background: none;
            box-shadow: 4px 4px 10px #000000 inset,-4px -4px 10px #555 inset;
            border-radius: 20px;
        }
        
        button{
            background: #C02425; 
            background: -webkit-linear-gradient(to right, #F0CB35, #C02425);  
            background: linear-gradient(to right, #F0CB35, #C02425); 
            border-radius: 20px !important;
            border:none;
            outline: none !important;
            padding: 7px;
            font-weight: 800;
            color: #cbced1;
        }
        input{
            background: none !important;
            outline: none;
            border:none;
            width: 85%;
            border-radius: 20px;
            color: #cbced1 !important;

        }
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            transition: background-color 5000s ease-in-out 0s;
        }

        input:-webkit-autofill {
            -webkit-box-shadow: /*your box-shadow*/,0 0 0 50px white inset;
            -webkit-text-fill-color: #eff4ff;
        }  

        i{
            font-size: 20px;
            color:#555;
        }
    </style>
    @livewireStyles
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md  bg-none">
            <div class="container">
              
               

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @livewireScripts
</body>
</html>
