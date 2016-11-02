<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {!! Html::style('/css/materialize.css') !!}
    {!! Html::style('/css/style.css') !!}
 

    <!-- Fonts -->
    <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>-->

</head>
<body>
    <!-- Navbar -->
    @include('partials.laravelnavbar')


    <div class="container">
        @yield('content')
    </div>

    <div class="footer">
        @yield('footer')
        <!-- Scripts -->
        {!! Html::script('/js/jquery-1.11.3.min.js') !!}
        {!! Html::script('/js/materialize.min.js') !!}
        {!! Html::script('/js/init.js') !!}
        {!! Html::script('/js/main.js') !!}


        <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
        @yield('js')
    </div>

</body>
</html>
