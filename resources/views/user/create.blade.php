@extends('template.app')

@section('title')
    Novo
@stop
@section('table')
    <h1 class="ui section title">Novo</h1>
    {{ Form::open(['class'=>'ui form', 'route'=>'users.store']) }}
    <div class="field">
        <label>Nome</label>
        <input type="text" name="name" placeholder="Nome">
    </div>
    <div class="field">
        <label>Email</label>
        <input type="text" name="email" placeholder="Email">
    </div>
    <div class="field">
        <label>Senha</label>
        <input type="password" name="password" placeholder="Senha">
    </div>

    <button class="ui basic green button" type="submit">Enviar</button>
    {{ Form::close() }}
@stop
