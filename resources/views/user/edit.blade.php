@extends('template.app')

@section('title')
    Editar
@stop
@section('table')
    <h1 class="ui section title">Novo</h1>
    {{ Form::open(['class'=>'ui form', 'route'=>'users.update']) }}
    <div class="disabled field">
        <label>id</label>
        <input type="text" name="id" placeholder="Nome" value="{{$user->id}}">
    </div>
    <div class="field">
        <label>Nome</label>
        <input type="text" name="name" placeholder="Nome" value="{{$user->name}}">
    </div>
    <div class="field">
        <label>Email</label>
        <input type="text" name="email" placeholder="Email" value="{{$user->email}}">
    </div>

    <button class="ui button" type="submit">Enviar</button>
    {{ Form::close() }}
@stop
