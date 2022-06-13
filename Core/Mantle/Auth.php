<?php

namespace Chungu\Core\Mantle;

use Chungu\Models\User;
use Chungu\Core\Mantle\Request;
use Chungu\Core\Mantle\Session;

class Auth {

    public static function login($username, $password) {

        $password = md5($password);

        $user =  User::query("select username, email, role, password  from users where username = \"$username\"");

        //$user = User::where(['username', 'password'], ['username', $username]);
        if (empty($user)) {
            logger("Info: Login: No account with {$username} username");
            Request::$errors[] = "There is no user with {$username} username";
            view('signin', ['e' => Request::$errors]);
            return;
        }
        $user = (object)$user[0];

        if ($password === $user->password) {
            logger("Info: Login: Successfully logged in {$username}");
            Session::make('loggedIn', true);
            Session::make('id', $user->id);
            Session::make('user', $user->username);
            Session::make('email', $user->email);
            Session::make('role', $user->role);
            //Todo Implement Session tokens  
            notify("Successfully logged in");
            redirect('/dashboard');
        } else {
            logger("Info: Login: Wrong Credentials");
            array_push(Request::$errors, "Wrong credentials, Please try again!");
             view('signin', ['e' => Request::$errors]);
            return;
        }
    }
    public static function logout($user) {
        logger("Info: Login: logged out $user");
        Session::unset($user);
        Session::make('loggedIn', false);
        Session::destroy();
    }
}
