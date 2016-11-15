<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\User;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('user.index')->with(compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $form)
    {
        $user = new User();
        //Atribui valores do formulário ao ORM User
        $user->name = $form->input('name');
        $user->email = $form->input('email');
        $user->password = bcrypt($form->input('password'));
        //Salva o dados no db.
        $user->save();

        return redirect()->route('users.index')->with('message','Item criado com sucesso!');
    }

    public function edit($id = null)
    {
        $user = User::find($id);
        if (!is_null($user)):
            return view('user.edit')->with(compact('user', 'id'));
        else:
            return redirect()->route('users.index')->withErrors(['Usuário não encontrado!']);
        endif;
    }

    public function update(Request $form, $id)
    {
        //Assing ORM  from bd from id = ?
        $user = User::find($id);
        //Set new values in ORM
        $user->name = $form->input('name');
        $user->email = $form->input('email');
        //Save ORM in database
        $user->update();


        return redirect()->route('users.index')->with('message','Item atualizado com sucesso!');
    }

    public function delete($id = null)
    {
        //Assing ORM  from bd from id = ?
        $user = User::find($id);
        //Delete database file
        if(!empty($user)):
            $user->delete();
            return redirect()->route('users.index')->with('message','Item deletado!');
        else:
            return redirect()->route('users.index')->withErrors(['Não foi possível deletar!']);
        endif;

    }
}
