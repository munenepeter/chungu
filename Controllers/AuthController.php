<?php

namespace Chungu\Controllers;

use Chungu\Core\Mantle\Auth;
use Chungu\Core\Mantle\Request;
use Chungu\Core\Mantle\Session;

class AuthController extends Controller {
    public function signin() {
      
        $this->request->validate($_POST, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!empty(Request::$errors)) {
            return view('signin', [
                'errors' => Request::$errors
            ]);
      
        }

        Auth::login($this->request->form('username'), $this->request->form('password'));
    }

    public function signout() {
        Auth::logout(Session::get('user'));
        redirect('/');
    }
}
