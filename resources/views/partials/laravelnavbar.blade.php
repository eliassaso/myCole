<body>
<!--nav-->
<nav class="navbar navbar-custom navbar-fixed-top" role="">
    <div class="container">
        <div class="nav-wrapper">
            <a href="/home" class="brand-logo">SCHOOL</a>
            <div class="navbar-header page-scroll">

            </div>
            <a class="navbar-brand" href="#"></a>


        <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">-->
            <ul class="right hide-on-med-and-down">
                <!--<li><a href="{{ url('/') }}">Home</a></li>-->
                @if (!Auth::guest() && Auth::user()->roll == 'estudiante')

                    <ul id="dropdown6" class="dropdown-content" role="menu">

                                    <!--<li><a href="/front/1" id='1' onclick="getTemas(id)">1</a></li>-->
                                    <li><a id='' href="{{ url('/front/1') }}">1</a></li>
                                    <li><a id='' href="{{ url('/front/2') }}">2</a></li>
                                    <li><a id='' href="{{ url('/front/3') }}">3</a></li>
                                    <li><a id='' href="{{ url('/front/4') }}">4</a></li>
                                    <li><a id='' href="{{ url('/front/5') }}">5</a></li>
                                    <li><a id='' href="{{ url('/front/6') }}">6</a></li>
                                    <li><a id='' href="{{ url('/front/7') }}">7</a></li>
                                    <li><a id='' href="{{ url('/front/8') }}">8</a></li>
                                    <li><a id='' href="{{ url('/front/9') }}">9</a></li>
                                    <li><a id='' href="{{ url('/front/10') }}">10</a></li>
                                    <li><a id='' href="{{ url('/front/11') }}">11</a></li>

                    </ul>

                <li><a class="dropdown-button" href="#!" data-activates="dropdown6">Materias<i class="material-icons right">arrow_drop_down</i></a>

                @endif
                @if (!Auth::guest() && Auth::user()->roll == 'profesor')
                    <li><a href="{{ url('/dashboard') }}">Temas</a></li>
                    <!--<li><a href="{{ url('/profesores') }}"></a></li>-->
                @endif
                @if (!Auth::guest() && Auth::user()->roll == 'admin')
                    <li><a href="{{ url('/materias') }}">Materias</a></li>
                    <ul id="dropdown4" class="dropdown-content" role="menu">

                                    <!--<li><a href="/front/1" id='1' onclick="getTemas(id)">1</a></li>-->
                                    <li><a href="{{ url('/profesores') }}">Profesores</a></li>
                                    <li><a href="{{ url('/profesores/create') }}">Reclutar</a></li>
                    </ul>

                   <li><a class="dropdown-button" href="#!" data-activates="dropdown4">Profesores<i class="material-icons right">arrow_drop_down</i></a>
                @endif
            <!--</ul>








            <ul class="nav navbar-nav navbar-right">-->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Entrar</a></li>
                    <li><a href="{{ url('/register') }}">Registrar</a></li>
                @else
                <ul id="dropdown1" class="dropdown-content">
                    <li>
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>

                  <li><a href="{{ url('/user') }}">Perfil</a></li>
                  <!--<li><a href="#!">two</a></li>
                  <li class="divider"></li>
                  <li><a href="#!">three</a></li>-->
                </ul>

                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i></a>
                </li>
                @endif
            </ul>

            <ul id="nav-mobile" class="side-nav">
                @if (!Auth::guest() && Auth::user()->roll == 'estudiante')

                <ul id="dropdown3" class="dropdown-content" role="menu">

                                    <!--<li><a href="/front/1" id='1' onclick="getTemas(id)">1</a></li>-->
                                    <li><a id='1' onclick="getTemas(id)">1</a></li>
                                    <li><a id='2' onclick="getTemas(id)">2</a></li>
                                    <li><a id='3' onclick="getTemas(id)">3</a></li>
                                    <li><a id='4' onclick="getTemas(id)">4</a></li>
                                    <li><a id='5' onclick="getTemas(id)">5</a></li>
                                    <li><a id='6' onclick="getTemas(id)">6</a></li>
                                    <li><a id='7' onclick="getTemas(id)">7</a></li>
                                    <li><a id='8' onclick="getTemas(id)">8</a></li>
                                    <li><a id='9' onclick="getTemas(id)">9</a></li>
                                    <li><a id='10' onclick="getTemas(id)">10</a></li>
                                    <li><a id='11' onclick="getTemas(id)">11</a></li>


                </ul>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown3">Materias<i class="material-icons right">arrow_drop_down</i></a>

                @endif
                @if (!Auth::guest() && Auth::user()->roll == 'profesor')
                    <li><a href="{{ url('/dashboard') }}">Temas</a></li>
                    <!--<li><a href="{{ url('/profesores') }}"></a></li>-->
                @endif
                @if (!Auth::guest() && Auth::user()->roll == 'admin')
                    <ul id="dropdown5" class="dropdown-content" role="menu">

                                    <!--<li><a href="/front/1" id='1' onclick="getTemas(id)">1</a></li>-->
                                    <li><a href="{{ url('/profesores') }}">Profesores</a></li>
                                    <li><a href="{{ url('/profesores/create') }}">Reclutar</a></li>
                    </ul>

                   <li><a class="dropdown-button" href="#!" data-activates="dropdown5">Profesores<i class="material-icons right">arrow_drop_down</i></a>
                   <li><a href="{{ url('/materias') }}">Materias</a></li>
                @endif
            <!--</ul>

            <ul class="nav navbar-nav navbar-right">-->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Entrar</a></li>
                    <li><a href="{{ url('/register') }}">Registrar</a></li>
                @else
                <ul id="dropdown2" class="dropdown-content">
                    <li>
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                  <!--<li><a href="#!">two</a></li>
                  <li class="divider"></li>
                  <li><a href="#!">three</a></li>-->
                </ul>

                <li><a class="dropdown-button" href="#!" data-activates="dropdown2">{{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i></a>
                </li>
                @endif
            </ul>

            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

        </div>
    </div>
</nav>
<!--end nav-->
