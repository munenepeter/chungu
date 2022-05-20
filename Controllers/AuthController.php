<?php

namespace Chungu\Controllers;

use Chungu\Core\Mantle\Auth;
use Chungu\Core\Mantle\Request;
use Chungu\Core\Mantle\Session;

class AuthController {
    public function login() {

        $username = Request::validate(Request::form('username'));
        $password = Request::validate(Request::form('password'));

        Auth::login($username, $password);
    }

    public function logout() {
        Auth::logout(Session::get('user'));
        redirect('index');
    }
}
