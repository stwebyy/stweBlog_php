<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="日々の業務や勉強で気づいたことなどの備忘録を記載していきます。php/Laravelなど。" />
        <meta name="format-detection" content="email=no,telephone=no,address=no" />
        <meta property="og:site_name" content="stweblog" />
        <meta property="og:locale" content="ja_JP" />
        <!-- Bootstrap CSS -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
            integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/styles/monokai-sublime.min.css">
        <link rel="stylesheet" href="{{ asset('assets/css/Reboot.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        @section('css')
        @show

        <title>@yield('title')</title>
    </head>
    <body>
        <div id="wrapper">
            @include('commons.header')
                @yield('content')
            @include('commons.footer')
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS, then Font Awesome -->
        @section('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.16.2/build/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        @show
    </body>
</html>
