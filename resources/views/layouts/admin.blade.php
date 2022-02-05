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
        
        font-family: "NRT";
        background-color: #1d1d1d !important;

        
        }
      




        ::-webkit-scrollbar {
        width: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background:  #83d0c9;     
            

        }
        @font-face{
            src: url("fonts/NRT.ttf");
            font-family: "NRT";
        }

        .iconsBar{
            border-radius:50%;
            padding:5px;
            box-shadow: -2px -2px 5px rgba(255, 255, 255, 0.2),
                        4px 4px 8px rgba(0, 0, 0, 0.8) ;
        }
        .i{
            width: 30px; height: 30px;
            text-shadow: 0px 0px 20px #C02425;
        }
        a{
            text-decoration: none !important;
            color: #83d0c9;transition: .5s;
        }
        a:hover{
            color: #eb7e25;
        }
        .button{
            background: #83d0c9;
            border-radius: 20px !important;
            border:none;
            outline: none !important;
            padding: 7px;
            font-weight: 800;
            color: #83d0c9;
            width: 40%;
            color:#1d1d1d;
            margin-left: 15px;
        }
        .cardUser:hover a{
            color: #1d1d1d !important;
        }
        .cardUser{
            border-radius: 20px;
            background: none !important;
            border: none;
            box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.8),
                        -2px -2px 5px rgba(255, 255, 255, 0.2); 
            font-size: 25px;
            overflow: hidden;
            height: 300px;
            
        }
        .cardUser *{
            position: relative;
        }
        .cardUser::before{
            content: '';
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0px;
            right: 0px;
            background: #83d0c9;
            clip-path: circle(150px at 10% 0%);
            transition: .7s;
        }

        .cardUser:hover::before{
            clip-path: circle(360px at 10% 0%)
        }

        .cardUser:hover img{
            transform: rotate(-20deg);
        }
        
        .cardUser img {
            width:50%;height:50%;transition: .7s;
        }
        .btns{
            background: none;
            border-radius: 20px !important;
            border:none;
            width: 100%;
            outline: none !important;
            padding: 10px;
            font-weight: 800;
            color:#83d0c9;
            box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.8),
                    -2px -2px 5px rgba(255, 255, 255, 0.2) ;
            transition: .4s;
        }

        .divBtns{
            padding: 10px;
            box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.8) inset,
                        -2px -2px 5px rgba(255, 255, 255, 0.2) inset; 
                        border-radius: 20px;
        }

        .inp , .inputDevs select{
            background: none;
            outline: none;
            border: none;
            color: #83d0c9;
            width: 100%;
            text-align: center;
        }   

        .inputDevs{
            padding: 5px;
            box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.8) inset,
                        -2px -2px 5px rgba(255, 255, 255, 0.2) inset; 
                        border-radius: 20px;
        }

        .users{
            background: none;
            color:#cbced1;
            box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.8) inset,
                        -2px -2px 5px rgba(255, 255, 255, 0.2) inset;
                        border-radius: 20px;
        }


        .cardfood{
            box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.8) inset;
            border-radius: 20px;
            color: #83d0c9;
            text-align: center;
            transition: .8s;
        }

        .cardfood img{
            width: 50px;height: 50px;margin-top: 10px;
        }
        .cardfood:hover{
            box-shadow: -4px -4px 8px #83d0c9 inset;
        }

        .btns:hover{
            box-shadow: 0px 0px 8px #83d0c9 ;
            color: #cbced1;
        }
        
    </style>
    @livewireStyles
</head>
<body>
    <div id="app">
        <nav class="navbar  bg-none">
            <div class="container">
                @if(Auth::user()->role->name=="administrator")
                <a class="navbar-brand" href="{{ url('/') }}">
                   <div class="iconsBar">
                       <img src="http://localhost/fastFoodApp/www/public/wallpaper/home-run.png" alt="" class="i">
                   </div>
                </a>
                @endif
                <div >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                         @else
                                 <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <div class="iconsBar">
                                            <img src="http://localhost/fastFoodApp/www/public/wallpaper/turn-off.png" class="i">
                                        </div>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 content">
            @yield('content')
        </main>
    </div>

    @livewireScripts
</body>
</html>
