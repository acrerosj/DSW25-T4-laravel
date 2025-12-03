<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $users = ["pepe", "ana", "juan", "vicente", "Amalia"];
    //private $users = [];

    public function get() {
        return view('users', ['users' => $this->users]);
    }

    public function getId(String $id) {
        //return $this->users[$id];
        $name =  $this->users[$id] ?? '';
        return view('user', [ 'name' => $name ]);
//        return view('user', ['name' =>  $this->users[$id]]);
    }
}
