<?php

namespace Chungu\Controllers;

use Chungu\Core\Mantle\Auth;
use Chungu\Core\Mantle\Request;
use Chungu\Core\Mantle\Session;

class AuthController {
    public function login() {
        $request =  new Request();

        $username = $request->validate($request->form('username'), ['username' => 'required']);
        $password = $request->validate($request->form('password'),  ['username' => 'required']);

        var_dump($username);
        Auth::login($username, $password);
    }

    public function logout() {
        Auth::logout(Session::get('user'));
        redirect('index');
    }
}
