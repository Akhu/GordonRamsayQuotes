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
    <meta property="og:url"                content="https://gordonramsayquotes.eu/{{ $quote->id }}" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="Inspiring quote from Gordon" />
    <meta property="og:description"        content="{{ $quote->content }}" />
    <meta property="og:image"              content="https://gordonramsayquotes.eu/images/gordonOG.jpg" />

    <title>Quote</title>

    <!-- Fonts -->
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
</head>
<body>
    <header>
        <a href="{{ url('/') }}">gordonramsayquotes.eu</a>
    </header>
    <div class="app">
        <div class="content">
            <div class="quote" id="quote-content">
                {{ $quote->content }}
            </div>

            <div class="sharing">
                Spread the fucking good cooking.
                <div class="links">
                    <a class="btn twitter" href="https://twitter.com/intent/tweet?text={{ $quote->content . " - Gordon Ramsay" }}&url=https://gordonramsayquotes.eu/{{ $quote->id}}&hashtags=quote">Share on Twitter</a>
                    <div class="copy-mobile">
                        <span>Select and copy to share</span>
                        <input type="text" value="{{ url('/' . $quote->id) }}" class="input-copy"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div>Made with love by <a href="https://twitter.com/anthokhun">@anthokhun</a></div>
        <div>This is not affiliated with Gordon Ramsay, I just like his way of managing people</div>
        <div><a href="mailto:me@anthony-dacruz.com?Subject=I%20have%20a%20quote%20suggestion%20%21%20Or%20just%20want%20to%20say%20Hi%20%21">Contact</a></div>
    </footer>
    <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-109908049-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>
