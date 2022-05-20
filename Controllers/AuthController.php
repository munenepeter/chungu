<?php

namespace Chungu\Controllers;

use Chungu\Core\Mantle\Auth;
use Chungu\Core\Mantle\Request;
use Chungu\Core\Mantle\Session;

class AuthController {
    public function login() {
        
        $request =  new Request();

        $request->validate([
            $request->form('username'),
            $request->form('password')
        ], [
            'username' => 'required',
            'password' => 'required'
        ]);

      //  $password = $request->validate($request->form('password'),  ['username' => 'required']);

        var_dump($request->form('username'));
        exit;
        Auth::login($request->form('username'), $request->form('password') );
    }

    public function logout() {
        Auth::logout(Session::get('user'));
        redirect('index');
    }
}
