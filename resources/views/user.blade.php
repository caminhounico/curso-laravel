@extends('template.app')
@section('title')
    Users
@stop
@section('table')
    <table class="ui celled table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop