<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <!-- OGs -->
        <meta property="og:url"                content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
        <meta property="og:type"               content="website" />
        <meta property="og:title"              content="{{ $quote->content }}" />
        <meta property="og:description"        content="How much does culture influence creative thinking?" />
        <meta property="og:image"              content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
        
        <title>Quote</title>

        <!-- Fonts -->
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
    </head>
    <body>
        <header>
            <a href="{{ url('/') }}">gordonramsayquotes.com</a>
        </header>
        <div class="app">
            <div class="content">
                <div class="quote">
                    {{ $quote->content }}
                </div>

                <div class="sharing">
                    Spread the fucking good cooking.
                    <div class="links">
                        <a class="btn twitter" href="https://twitter.com/intent/tweet?text={{ $quote->content . " - Gordon Ramsay" }}&via=gordonramsayquotes.com">Share on Twitter</a>
                        <a class="btn clipboard" onclick="copy('{{ $quote->content . " - Gordon Ramsay" }}')" href="">Copy</a>
                        <div class="copy-mobile">
                            <span>Select and copy to share</span>
                            <input type="text" value="{{ url('/' . $quote->id) }}" class="input-copy"/>
                        </div>
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
