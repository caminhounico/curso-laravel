@extends('template.app')
@section('title')
    Users
@stop
@section('table')
    <h1 class="ui section title">Usuários</h1>
    <table class="ui celled table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop