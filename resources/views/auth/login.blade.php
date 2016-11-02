

@extends('app')

@section('content')

    <div class="container">
        <form class="col s6" role="form" method="POST" action="{{ url('/login') }}" style="margin-top: 15px;">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="row">
                <div class="input-field col s8">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    <label for="username">Username</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s8">
                    <i class="material-icons prefix">vpn_key</i>
                    <input type="password" class="form-control" name="password">
                    <label for="password">Password</label>
                </div>
            </div>



            <button style="margin-left: 45px;" type="submit" class="waves-effect waves-light btn left hoverable"><i class="large material-icons right">lock_open</i>Login</button>
            <label style='float: right;'><a class='pink-text' href="{{ url('/password/email') }}"><b>Forgot Password?</b></a></label>

        </form>

        <br><br>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong class='red-text'>Whoops!</strong> <p class='red-text'>Revisar usuario o contraseña!!.</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class='red-text'>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>

@endsection

