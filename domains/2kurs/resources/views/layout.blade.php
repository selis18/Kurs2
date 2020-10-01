<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_text')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" type ="image/png" href="fav.png">
</head>
<body class="bg-light">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm text-white">
    <a class="my-0 mr-md-auto font-weight-bolder text--bold text-white " href="/">ВЕТЕРИНАРНАЯ КЛИНИКА</a>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white-50" href="/about">О нас</a>
        <a class="p-2 text-white-50" href="#">Контакты</a>
    </nav>
    <a class="btn btn-outline-light" href="/cabinet">Личный кабинет</a>
</div>
    @yield('main_content')
</body>
</html>
