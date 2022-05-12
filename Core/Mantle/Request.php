<?php

namespace Chungu\Core\Mantle;


class Request {
    public static $errors = [];
    //get the current URI
    public static function uri() {

        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }
    //get the method as requested by the router
    public static function method() {

        return $_SERVER['REQUEST_METHOD'];
    }
    public static function form($input) {
        if (isset($_POST['submit'])) {
            if (Request::method() == 'POST') {
                return $_POST[$input];
            }
            if (Request::method() == 'GET') {
                return $_GET[$input];
            }
        }
    }
    public static function validate($input) {
        //To Do, Call the validator class
    }
}
