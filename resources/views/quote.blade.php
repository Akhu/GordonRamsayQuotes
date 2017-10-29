<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- OGs -->
        
        <title>Quote</title>

        <!-- Fonts -->
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
    </head>
    <body>
        <header>
            <a href="">gordonramsayquotes.com</a>
        </header>
        <div class="app">
            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
                @endif -->

            <div class="content">
                <div class="quote">
                    {{ $quote->content }}
                </div>


                <div class="sharing">
                    Spread the fucking good cooking.
                    <div class="links">
                        <a href="">Share on Twitter</a>
                        <a href="">Copy</a>
                        <a href="">Share on Facebook</a>
                    </div>
                </div>
            </div>
            
        </div>
        <footer>
            
            <div>Made with love by <a href="">@anthokhun</a></div>
            <div>This is not affiliated with Gordon Ramsay, I just like his way of managing people</div>
            <div><a href="">Contact</a></div>
        </footer>
    </body>
</html>
