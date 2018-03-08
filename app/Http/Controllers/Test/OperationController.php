<?php

namespace App\Http\Controllers\Test;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OperationController extends Controller
{
    public function index()
    {

        $title = '菜单';
        $users = User::all();

        return view('Test\operationIndex',[
            'title' => $title,
            'users'  => $users
        ]);
    }
}
