<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    <title>{{$title ?? 'Категории товаров'}}</title>
</head>
<body>
<h1>{{$title ? $title : 'название Categories-страницы'}}</h1>
<p>Описание страницы: {{$description}}</p>

@yield('content')

</body>
</html>
