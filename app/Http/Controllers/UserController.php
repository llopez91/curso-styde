<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (request()->has('empty')) {
            $users = [];
        } else {
            $users = array(
                0 => array(
                    'id' => 1,
                    'usuario' => 'Thomas',
                ),
                1 => array(
                    'id' => 2,
                    'usuario' => 'Luis',
                ),
                3 => array(
                    'id' => 3,
                    'usuario' => 'Javier',
                ),
            );
        }

        $title = 'Listado de usuarios';

        $otroArray = ['jskjadasklj','asdadsasd','asdasdad'];

        return view('users.index', compact('users', 'title', 'otroArray'));
    }

    public function show($id)
    {
        return view('users.show', compact('id'));
    }

    public function create()
    {
        return "Creando un nuevo usuario";
    }
}
