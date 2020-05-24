<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>@yield('title')</title>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">{{__('welcome.welcome')}}</h1>
        <p class="lead">{{__('welcome.name')}}</p>
        <p class="lead">{{__('welcome.designation')}}</p>
    </div>
    <div class="container">
        <a href="/">Back</a>
        >
    </div>
</div>
</body>
</html>
