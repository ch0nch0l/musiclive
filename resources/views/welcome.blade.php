<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    
        <title>{{env('APP_NAME')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .login_button {
            width: 150px;
            height: 50px;
            font-size: 20px;
            color: white;
            background: green;
            border-radius: 9px;
        }
        .home_button {
            width: 150px;
            height: 50px;
            font-size: 20px;
            color: white;
            background: red;
            border-radius: 9px;
        }
    </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Welcome to
                    <br>
                    Music
                   <br>
                  
            @if (Route::has('login'))
                
                    @auth
                    <form action="{{ url('/home') }}">
                        <button class="home_button" title="Click to go to Dashboard" type="submit">Home</button>
                    </form>
                        
                    @else
                    <form action="{{ route('login') }}">
                        <button class="login_button" title="Click to go to Login page" type="submit">Login</button>
                    </form>
                        {{--  <a href="{{ route('register') }}">Register</a>  --}}
                    @endauth
               
            @endif
                    
                </div>

               
            </div>
        </div>
    </body>
</html>
