@extends('template.app')
@section('title')
    Users
@stop
@section('table')
    <h1>Usuários</h1>
    <a href="{{route('users.create')}}">Criar novo</a>
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
                    {{Form::open(['route'=>'users.edit', 'class'=>'ui form'])}}
                    <input type="hidden" name="id" value="{{$user->id}}"/>
                    <button class="ui mini basic button" type="submit">Editar</button>
                    {{Form::close()}}
                    {{Form::open(['route'=>'users.delete', 'class'=>'ui form'])}}
                    <input type="hidden" name="id" value="{{$user->id}}"/>
                    <button class="ui mini basic red button" type="submit">Deletar</button>
                    {{Form::close()}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

