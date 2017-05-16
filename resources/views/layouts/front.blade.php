<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadilab's Forum</title>
    <link rel="stylesheet" href="https://bootswatch.com/cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>

<style>
    .well{
        background-color: rgb(207, 207, 208);
    }
</style>

@include('layouts.assets.navbar')

<div class="container">
    <a class="btn btn-primary pull-right"  href="{{route('thread.create')}}">Create Thread</a><br><br>

    @yield('content')

</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>