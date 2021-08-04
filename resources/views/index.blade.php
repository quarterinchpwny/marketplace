<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script defer src="{{ mix('js/client.js') }}"></script>
  </head>
  <body>
    {!! ssr('js/server.js')
      ->fallback('<div id="app"></div>')
      ->enabled(false)
      ->debug(true)
      ->render() 
    !!}
    <script>
      window.__PRELOADED_STATE__ = @json([])
    </script>
  </body>
</html>