<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title>Estoque - @yield('title')</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/app.css"/>
    </head>
    <body>
        <div class="container">
            <div class="row ">
                <div class='col border header '>
                    @section('header')
                    Aqui é o cabeçalho.
                    @show
                </div>
            </div>
            <div class="row">
                <div class='col-3 border sidebar'>
                    @yield('sidebar')
                </div>
                <div class='col-9 border content'>
                    @yield('content')
                </div>
            </div>
            <div class='row '>
                <div class='col border menu'>Aqui é o rodapé</div>
            </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/app.js"></script>
        @yield('scripts')
    </body>
</html>