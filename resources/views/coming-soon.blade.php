<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ Decoy::el('coming-soon.meta.title') }}</title>

        <link rel="icon" href="{{ Decoy::el('general.meta.favicon') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,600" rel="stylesheet" type="text/css">

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
                font-weight: 100;
            }

            .subtitle {
                font-size: 42px;
            }

            .text {
                font-weight: 300;
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

            .m-t-0 {
                margin-top: 0;
            }

            .m-b-sm {
                margin-bottom: 15px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                @if(Decoy::el('coming-soon.body.show_image')->value())
                    <img src="{{ Decoy::el('coming-soon.body.image') }}" alt="{{ Decoy::el('coming-soon.body.title') }}">
                @else
                    <h1 class="title m-b-sm m-t-0">{{ Decoy::el('coming-soon.body.title') }}</h1>
                @endif
                <div class="subtitle m-b-md">
                    {{ Decoy::el('coming-soon.body.subtitle') }}
                </div>

                <div class="text">{!! Decoy::el('coming-soon.body.content') !!}</div>
            </div>
        </div>
    </body>
</html>
