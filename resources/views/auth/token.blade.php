@extends('app')
@section('content')
<div style='margin-top: 10px;' class="container-fluid" id = 'main'>
<div class="col-md-4 col-md-offset-4">

        <div class="container-fluid panel panel-default" id="">
        {!! Form::open(['method'=>'POST', 'action' => ['FrontController@includeNewToken']]) !!}
            <div class="form-group">
                {!! Form::hidden('idTema', $id, ['class'=>'form-control'])  !!}
            </div>
            <div class="col s6">
                {!! Form::label('licencia','Digite su licencia')  !!}
                {!! Form::text('licencia', null , ['class'=>'col s6'])  !!}
            </div>

            <!-- Submit -->
            <button class = 'waves-effect waves-light btn left hoverable' type = "submit">
                {!! Form::submit('Enviar', ['class' => ''])  !!}
            </button>

        {!! Form::close() !!}

        <br><br>
        <span class = "red-text darken-1">{!! $mensaje !!}</span>

        </div>

</div>
</div>

@endsection
