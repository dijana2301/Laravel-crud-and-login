<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CLUBS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image:url("sporttt.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 100%;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .bloc {
                background-color: lightblue;
                border: 1px solid;
                padding: 0px 10px;
                box-shadow: 15px 5px #888888;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .myButton {
	        box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	        background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
	        background-color:#79bbff;
	        border-radius:6px;
	        border:1px solid #84bbf3;
	        display:inline-block;
	        cursor:pointer;
	        color:#ffffff;
	        font-family:Arial;
	        font-size:15px;
	        font-weight:bold;
	        padding:6px 24px;
	        text-decoration:none;
	        text-shadow:0px 1px 0px #528ecc;
            }
            .myButton:hover {
	        background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
	        background-color:#378de5;
            }
            .myButton:active {
	        position:relative;
	        top:1px;
            }

        
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" class="myButton">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="myButton">Login </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="myButton">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class=" myButton content">
                <div class="title m-b-md">
                    CLUBS
                </div>

                <div class="links">
                    <a href="/clubs"><button class="myButton">  CRUD and LOGIN  </button></a>
                  <br><br>
                </div>
            </div>
        </div>
    </body>
</html>
