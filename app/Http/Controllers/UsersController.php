<?php

namespace App\Http\Controllers;


use App\Http\Requests\UsersCreateRequest;
use App\Http\Requests\UsersUpdateRequest;
use App\Repositories\UsersRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\User;

class UsersController extends Controller
{
    //Add repository object in this class
    protected $userRepository;

    public function __construct()
    {
        return $this->userRepository = new UsersRepository();
    }

    public function index()
    {
        $users = $this->userRepository->findAll();
        return view('user.index')->with(compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(UsersCreateRequest $form)
    {
        $result = $this->userRepository->store($form);
        if ($result):
            return redirect()->route('users.index')->with('message', 'Item criado com sucesso!');
        endif;
        return redirect()->route('users.index')->withErrors(['Não foi possivel salvar o usuário!']);
    }

    public function edit($id = null)
    {
        $user = $this->userRepository->findById($id);
        if (!is_null($user)):
            return view('user.edit')->with(compact('user', 'id'));
        endif;
        return redirect()->route('users.index')->withErrors(['Usuário não encontrado!']);
    }

    public function update(UsersUpdateRequest $form, $id)
    {
        $result = $this->userRepository->update($form, $id);

        if($result):
            return redirect()->route('users.index')->with('message', 'Item atualizado com sucesso!');
        else:
            return redirect()->route('users.index')->withErrors(['Não foi possível atualizar!']);
        endif;
    }


    public function delete($id = null)
    {
        $result = $this->userRepository->delete($id);
        if ($result):
            return redirect()->route('users.index')->with('message', 'Item deletado!');
        endif;
        return redirect()->route('users.index')->withErrors(['Não foi possível deletar!']);

    }
}
