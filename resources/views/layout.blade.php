<!DOCTYPE html>
<html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>ItBlog - Free Html5 Templates</title>
    <meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
    <meta name="author" content="https://www.zerotheme.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset("assets/css/zerogrid.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/font-awesome/css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/menu.css") }}">
    <script src="{{ asset("assets/js/jquery1111.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/js/script.js") }}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{ asset("assets/css/owl.carousel.css") }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div style=' clear: both; text-align:center; position: relative;'></div>

    <script src="{{ asset("assets/js/html5.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/css3-mediaqueries.js") }}" type="text/javascript"></script>

</head>
<body class="single-page">
<div class="wrap-body">
    <header class="">
        <div class="logo">
            <a href="/">ItBlog</a>
            <span>IT world technology collection</span>
        </div>

        <div id="cssmenu" class="align-center">
            <ul>
                <li><a href="/"><span>Home</span></a></li>
                <li class="active"><a href=""><span>About</span></a></li>
                <li class="last"><a href="/add"><span>Page</span></a></li>
                <li class="last"><a href="/room"><span>Admin</span></a></li>
                <button type="button" class="btn btn-outline-success" id="search">Search</button>
{{--                <li class="last"><button type="button" class="btn btn-outline-success" id="search">Search</button></li>--}}
            </ul>

            <div style="display: none" id="form-search">
                <form class="" method="get" action="/search" enctype="multipart/form-data" style="display: flex; position: absolute;">
                    @csrf
                    <input type="text" class="form-control form-control-dark" name="val" id="val" placeholder="&#128270;" aria-label="Search">
                    <button type="submit" class="btn btn-outline-success my-2 my-sm-0" name="search" id="search" style="color: antiquewhite;">Поиск
                    </button>
                </form>
            </div>
        </div>
    </header>
</div>


<script>
    $('#search').click(function () {
        $("#form-search").css("display", "block");
    });
</script>


