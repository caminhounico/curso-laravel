<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UsersController extends Controller
{

    public function index()
    {
        $users = \App\User::all();

        return view('user.index')->with(compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $form)
    {
        $user = new \App\User();
        //Atribui valores do formulário ao ORM User
        $user->name = $form->input('name');
        $user->email = $form->input('email');
        $user->password = bcrypt($form->input('password'));
        //Salva o dados no db.
        $user->save();

        return redirect()->route('users.index');
    }

    public function edit(Request $form)
    {
        $user = \App\User::find($form->input('id'));

        return view('user.edit')->with(compact('user'));
    }

    public function update(Request $form)
    {
        //Assing ORM  from bd from id = ?
        $user = \App\User::find($form->input('id'));
        //Set new values in ORM
        $user->name = $form->input('name');
        $user->email = $form->input('email');
        //Save ORM in database
        $user->update();

        return redirect()->route('users.index');
    }

    public function delete(Request $form)
    {
        //Assing ORM  from bd from id = ?
        $user = \App\User::find($form->input('id'));
        //Delete database file
        $user->delete();

        return redirect()->route('users.index');
    }
}
