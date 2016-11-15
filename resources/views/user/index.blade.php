@extends('template.app')
@section('title')
    Users
@stop
@section('table')
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
                    <a class="ui mini basic red button" href="{{route('users.delete', $user->id)}}">Deletar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

