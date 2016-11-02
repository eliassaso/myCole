@extends('app')
@section('content')

<div class="container" id = '' style="">

<form class="form-horizontal" role="form" method="POST"
                  action="{{ url('user/') }}/{{ Auth::user()->id }}"
                  enctype="multipart/form-data">
                <input type="hidden" name="id" value={{ Auth::user()->id }}>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PATCH">


                <!--<input type="file" id="file" name="file">-->
                    <div class="col-lg-6">

                        <label>Nombre</label>
                        <br>
                        <input type="text" id="name" name="name"  class="form-control" value="{{Auth::user()->name}}">
                        <br>
                        <label>Apellido</label>
                        <input type="text" id="last_name" name="last_name"  class="form-control" value="{{Auth::user()->last_name}}">
                        <br>

                    </div>
                    <div class="col-lg-6">

                        <label>Email</label>
                        <input type="email" id="email" name="email"  class="form-control" value="{{Auth::user()->email}}">
                        <br>
                        <label>Teléfono</label>
                        <input type="text" id="phone" name="phone"  class="form-control" value="{{Auth::user()->phone}}">
                        <br>
                        <label>Provincia</label>
                        <input type="text" id="province" name="province"  class="form-control" value="{{Auth::user()->province}}">
                        <br>

                        <label>Estatus</label>
                        <input disabled type="text" id="status" name="status"  class="form-control" value="{{Auth::user()->status}}">
                        <br>


                        <h4>Deceas cambiar la contraseña?</h4>
                        <label>Digite su contraseña actual</label>
                        <input type="password" id='passwordActual' class="form-control" name="passwordActual">
                        <br>
                        <p class="red-text"><strong>{{ $error }}</strong></p><br>
                        <label>Digite su nueva contraseña</label>
                        <input type="password" id='passwordNuevo' class="form-control" name="passwordNuevo">

                        <button type="submit" class="btn btn-success pull-right"> <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>Actualizar</button>

                    </div>
            </form>
            @if (count($errors) > 0)
              <div class="alert alert-danger">
                <strong class='red-text'>Whoops!</strong> <p class='red-text'>Revisar datos!!.</p>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li class='red-text'>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

</div>
@endsection

@section('js')
    {!! Html::script('/js/main.js') !!}
@endsection
