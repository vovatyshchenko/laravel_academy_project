<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class UsersController extends Controller
{
    private $users = [
        [
            'name' => 'Vasya',
            'surname' => 'Ivanov',
            'age' => '23',
            'sex' => 'Male',
            'rol' => 'User'
        ],
        [
            'name' => 'Ivan',
            'surname' => 'Ivanov',
            'age' => '32',
            'sex' => 'Male',
            'rol' => 'Admin'
        ],
        [
            'name' => 'John',
            'surname' => 'Doe',
            'age' => '25',
            'sex' => 'Male',
            'rol' => 'Content manager'
        ],
        [
            'name' => 'Sara',
            'surname' => 'Connor',
            'age' => '24',
            'sex' => 'famale',
            'rol' => 'User'
        ],
    ];

    public function index()
    {
        return view('users.index');
    }

    public function users()
    {
        $users = $this->users;
        return view('users.users', compact('users'));
    }

    public function showUsers($id)
    {
        $user = $this->users[$id];
        return view('users.showusers', compact('user'));
    }

    public function about()
    {
        return view('users.about');
    }
}
