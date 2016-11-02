@extends('app')

@section('content')
    <div class="container-fluid panel panel-default">
    <h1>Editando: {!! $pregunta->pregunta  !!}</h1>
    <hr>

    {!! Form::model($pregunta, ['method'=>'PATCH', 'action' => ['PreguntasController@update', $pregunta->id]]) !!}
        @include('preguntas.form',['submitButtonText'=>'Actualizar pregunta'])
    {!! Form::close() !!}

    @include('errors.list')
    </div>

@stop