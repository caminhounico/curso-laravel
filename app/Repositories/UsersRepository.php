<?php


namespace App\Repositories;


use App\User;

class UsersRepository
{
    public function findAll()
    {
        return $users = User::all();
    }


    public function findById($id)
    {
        return $users = User::find($id);
    }


    public function store($Request)
    {
        $user = new User();
        //Atribui valores do formulário ao ORM User
        $user->name = $Request->input('name');
        $user->email = $Request->input('email');
        $user->password = bcrypt($Request->input('password'));

        //Salva o dados no db.
        return $user->save();
    }

    public function update($Request, $id)
    {
        //Assing ORM  from bd from id = ?
        $user = User::find($id);
        if (!empty($user)):
            //Set new values in ORM
            $user->name = $Request->input('name');
            $user->email = $Request->input('email');
            //Save ORM in database
            return $user->update();
        endif;
        return false;
    }


    public function delete($id)
    {
        //Assing ORM  from bd from id = ?
        $user = User::find($id);
        //Delete database file
        return $user->delete();
    }


}