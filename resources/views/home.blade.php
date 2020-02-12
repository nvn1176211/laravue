<!DOCTYPE html>
<html class="h-100per">

    <head>
        <base href="{{ asset('') }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>NVN Center</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="css/app.css?v{{time()}}">
    </head>

    <body>
        <div id="app">
        </div>
    </body>
    <script src="js/app.js?v{{time()}}"></script>
</html>