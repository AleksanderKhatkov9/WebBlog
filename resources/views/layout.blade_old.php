 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>


</head>
<body class="">

<div
    class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark  text-white border-bottom shadow-sm">

    <h5 class="my-0 mr-md-auto font-weight-normal">
        <a href="/">
            <img src="{{asset('storage/images/blog.jpg') }}"
                 style="width: 100px; height: 50px; margin-right: 50px;"></a>
    </h5>


    <form class="" method="get" action="/search" enctype="multipart/form-data" style="display: flex;">
        @csrf
        <input type="text" class="form-control form-control-dark" name="val" id="val" placeholder="&#128270;"
               aria-label="Search">
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0" name="search" id="search"
                style="color: antiquewhite;">Поиск
        </button>
    </form>


    <div style="padding-left: 30px">
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="btn btn-outline-warning" href="/">Главная</a>
            <a class="p-2 text-white" href="/add">Добавить</a>
            <a class="p-2 text-white" href="/room">Кабинет</a>
            <a class="btn btn-outline-warning" href="/test">Вход</a>
        </nav>
    </div>

</div>

<div class="container">
    @yield('main_content')
</div>








</body>
</html>
