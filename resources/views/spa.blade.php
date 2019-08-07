<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        <title>Laravel</title>
    </head>
    <body>
      <div id="app">
        <app></app>
      </div>
      <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
