@extends('layouts.app')

@section('title')
    Novo
@stop
@section('content')
    <h1 class="ui section title">Novo</h1>

    @include('partials.alert')

    {{ Form::open(['class'=>'ui form', 'route'=>'users.store']) }}
    <div class="field">
        <label>Nome</label>
        <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
    </div>
    <div class="field">
        <label>Email</label>
        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
    </div>
    <div class="field">
        <label>Senha</label>
        <input type="password" name="password" placeholder="Senha">
    </div>

    <button class="ui basic green button" type="submit">Enviar</button>
    {{ Form::close() }}
@stop
