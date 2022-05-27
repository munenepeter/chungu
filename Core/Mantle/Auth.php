<?php

namespace Chungu\Core\Mantle;

use Chungu\Models\User;
use Chungu\Core\Mantle\Request;
use Chungu\Core\Mantle\Session;

class Auth {

    public static function login($username, $password) {

        $password = md5($password);

        $user =  User::query("select username, password  from users where username = \"$username\"");

        //$user = User::where(['username', 'password'], ['username', $username]);
        if (empty($user)) {
            Logger::log("INFO: Login: No account with {$username} username");
            array_push(Request::$errors, "There is no user with {$username} username");
            view('signin', ['e' => Request::$errors]);
            return;
        }
        $user = (object)$user[0];
        if ($password === $user->password) {
            Logger::log("INFO: Login: Successfully logged in {$username}");
            Session::make('loggedIn', true);
            Session::make('user', $user[0]->username);
            //Todo Implement Session tokens  
            redirect('/dashboard');
        } else {
            Logger::log("INFO: Login: Wrong Credentials");
            array_push(Request::$errors, "Wrong credentials, Please try again!");
            view('signin', ['e' => Request::$errors]);
            return;
        }
    }
    public static function logout($user) {
        Logger::log("INFO: Login: logged out $user");
        Session::unset($user);
        Session::make('loggedIn', false);
        Session::destroy();
    }
}
