<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-left py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Главная</a></li>

            <li class="nav-item"><a href="#" class="nav-link">О странице</a></li>
        </ul>
    </header>
</div>
@yield('content')
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="text-muted">© 2022 Astarus</span>
        </div>
    </footer>
</div>
</body>
</html>

