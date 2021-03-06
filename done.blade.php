<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VSB</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        
            html, body {
                background-image:  url("http://timesofkabul.com/wp-content/uploads/2016/08/Pakistan-flag-HD-Images-Wallpapers-Pics-5.jpg");
                
                background-size: cover;
    background-attachment: scroll;
                color: #000;
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
                color: #fff;
                text-align: center;
                background-color: rgba(0,0,0,0.5);
               
                

            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/') }}">Home</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Thankyou!
                </div>

                <div class="links">
                    <h3> Your VOTE has been CASTED to your selected candidate.</h3>
                    
                </div>
            </div>
        </div>
    </body>
</html>
