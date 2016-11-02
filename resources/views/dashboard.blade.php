<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>Escuela</title>

	{!! Html::style('/css/materialize.css') !!}
	{!! Html::style('/css/style.css') !!}
	{!! Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}

</head>

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
					<ul id="dropdown3" class="dropdown-content" role="menu">

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
                <li><a class="dropdown-button" href="#!" data-activates="dropdown3">Materias<i class="material-icons right">arrow_drop_down</i></a>
				@endif
				@if (!Auth::guest() && Auth::user()->roll == 'profesor')
					<li><a href="{{ url('/dashboard') }}">Temas</a></li>
					<!--<li><a href="{{ url('/profesores') }}"></a></li>-->
				@endif
				@if (!Auth::guest() && Auth::user()->roll == 'admin')
					<li><a href="{{ url('/materias') }}">Materias</a></li>
					<li><a href="{{ url('/profesores') }}">Profesores</a></li>
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
					<li><a href="{{ url('/#') }}">Materias</a></li>
					<li><a href="{{ url('/#') }}"></a></li>
				@endif
				@if (!Auth::guest() && Auth::user()->roll == 'profesor')
					<li><a href="{{ url('/dashboard') }}">Temas</a></li>
					<!--<li><a href="{{ url('/profesores') }}"></a></li>-->
				@endif
				@if (!Auth::guest() && Auth::user()->roll == 'admin')
					<li><a href="{{ url('/materias') }}">Materias</a></li>
					<li><a href="{{ url('/profesores') }}">Profesores</a></li>
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

<section id="intro" class="intro">
		<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Bienvenido a My SCHOOL</h1>
        <div class="row center">
          <h5 class="header col s12 light">Una nueva forma de aprender</h5>
        </div>
        <div class="row center">
          <a href="{{ url('/register') }}" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Registrarse</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="img/3.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section" id='habilidades'>

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Aprenda rapido</h5>

            <p id='scrollFire1' class="light" style="color: #fff;">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Con un asesor disponible</h5>

            <p id='scrollFire2' class="light" style="color: #fff;">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Desde la comodidad de su hogar</h5>

            <p id='scrollFire3' class="light" style="color: #fff;">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/4.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p id="scrollFire4" class="left-align light" style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/2.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>
</section>


<!--<div class="jumbotron">
<h1>isw811</h1>

</div>-->


{!! Html::script('/js/jquery-1.11.3.min.js') !!}
{!! Html::script('/js/materialize.min.js') !!}
{!! Html::script('/js/init.js') !!}
{!! Html::script('/js/main.js') !!}



</body>
</html>
