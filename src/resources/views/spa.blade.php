<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>test</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div id="app">
    </div>
    @vite('resources/js/app.js')
</body>

</html>
