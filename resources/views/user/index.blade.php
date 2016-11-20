@extends('layouts.app')
@section('title')
    Users
@stop
@section('content')
    <h1>Usuários</h1>
    <a class="ui basic primary button" href="{{route('users.create')}}">Criar novo</a>

    @include('partials.alert')

    <table class="ui celled table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a class="ui mini basic button" href="{{route('users.edit', $user->id)}}">Editar</a>
                    <a class="ui mini basic red button btn-delete"
                       href="{{route('users.delete', $user->id)}}">Deletar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="ui small modal">
        <i class="close icon"></i>
        <div class="header">
            Confirmar Exclusão
        </div>
        <div class="content">
            <p>Você deseja realmente deletar este usuário?</p>
        </div>
        <div class="actions">
            <div class="ui cancel red basic  button">
                <i class="remove icon"></i>
                Não
            </div>
            <div class="ui ok green basic  button">
                <i class="checkmark icon"></i>
                Sim
            </div>
        </div>
    </div>
@stop


