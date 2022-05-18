<?php

namespace Chungu\Core\Mantle;

use Chungu\Models\User;
use Chungu\Core\Mantle\Request;
use Chungu\Core\Mantle\Session;

class Auth {
    
    public static function login($email, $password) {

        $password = md5($password);
        $user = User::where(['username','password', 'email'], ['email', $email]);
        if (empty($user)) {
            array_push(Request::$errors, "There is no account with {$email} email");
            view('login', ['e' => Request::$errors]);
            return;
        }
        if ($password === $user[0]->password) {
            Session::make('loggedIn', true);
            Session::make('user', $user[0]->username);
            //Todo Implement Session tokens  
            redirect('/');
        } else {
            array_push(Request::$errors, "Wrong credentials, Please try again!");
            view('login', ['e' => Request::$errors]);
            return;
        }
    }
    public static function logout($user){
        Session::unset($user);
        Session::make('loggedIn', false);
        Session::destroy();
    }
}
