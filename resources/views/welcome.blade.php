<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LabReportRepository') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
        }
        html,
        body {
            height: 100%;
        }
        #container {
          min-height: 100%;
        }
        #main {
            overflow: auto;
            padding-bottom: 180px;
        }
        #footer {
            position: relative;
            margin-top: -180px;
            height: 180px;
            clear: both;
        }
        #pre {
            margin-left: auto;
            margin-right: auto;
            margin-top: 10%;
            width: 50%;
            height: 50%;
        }
        body:before {
            content: "";
            height: 100%;
            float: left;
            width: 0;
            margin-top: -32767px;
        }
    </style>

</head>
<body>
    <div id="container">
        <div id="main">
            @include('nav')
            <div id="pre">
                <pre>
    The
 _                _         _____                                  _
| |              | |       |  __ \                                | |
| |        __ _  | |__     | |__) |   ___   _ __     ___    _ __  | |_
| |       / _` | | '_ \    |  _  /   / _ \ | '_ \   / _ \  | '__| | __|
| |____  | (_| | | |_) |   | | \ \  |  __/ | |_) | | (_) | | |    | |_
|______|  \__,_| |_.__/    |_|  \_\  \___| | .__/   \___/  |_|     \__|
                                           | |
 _____                                 _   |_|
|  __ \                               (_) | |
| |__) |   ___   _ __     ___    ___   _  | |_    ___    _ __   _   _
|  _  /   / _ \ | '_ \   / _ \  / __| | | | __|  / _ \  | '__| | | | |
| | \ \  |  __/ | |_) | | (_) | \__ \ | | | |_  | (_) | | |    | |_| |
|_|  \_\  \___| | .__/   \___/  |___/ |_|  \__|  \___/  |_|     \__, |
                | |                                              __/ |
                | |                                             |___/
                |_|             Home Page
                </pre>
            </div>
        </div>
    </div>
    <div id="footer">
        @include('footer')
    </div>
</body>
</html>
