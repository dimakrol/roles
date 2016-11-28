<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--<a href="{{ url('/login') }}">Login</a>--}}
                    {{--<a href="{{ url('/register') }}">Register</a>--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--<div class="content">--}}
            {{--</div>--}}
        {{--</div>--}}
        <h1>Hello world</h1>
        {{ Auth::user()->roles->first()->permissions()->first()->name }}
        @can('createPost')
            <h1>Gogo</h1>
        @endcan
    </body>
</html>
