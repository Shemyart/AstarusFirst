<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://astarusfirst.loc/css/app.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/23f3e04a5b.js" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    <div class="fa-3x">
        <a href="/"> <i class="fa-solid fa-cog fa-spin"></i></a>
    </div>
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a href="/" class="nav-link ">Личный кабинет</a></li>
        </ul>
        <ul class="nav nav-tabs">

            <li class="nav-item"><a href="/equipment" class="nav-link" aria-current="page">Оборудование</a></li>

            <li class="nav-item"><a href="/projects" class="nav-link">Проекты</a></li>
        </ul>



    </header>

</div>

@yield('content')
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <span class="text-muted">© 2022 Astarus</span>
        </div>
    </footer>
</div>
</body>
</html>

