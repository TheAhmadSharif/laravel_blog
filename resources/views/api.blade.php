<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>:: Blog </title>
        <link rel="icon" href="{{ URL::asset('/css/favicon.png') }}" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">
    </head>
    <body>
         @include('header')
        <div id="app">
            <example-component></example-component>
        </div>
        <script type="text/javascript" src="{{ 'js/app.js'}}"></script>
    </body>
</html>
