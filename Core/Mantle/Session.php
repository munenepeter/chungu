<?php

namespace Chungu\Core\Mantle;

class Session {

    public static function make(mixed $name, mixed $value) {
        if (isset($_SESSION[$name])) {
            return;
        }
        return $_SESSION[$name] = $value;
    }
    public static function get(mixed $name) {
        if (!isset($_SESSION[$name])) {
            return;
        }
        return $_SESSION[$name];
    }

    public static function unset(mixed $key) {
        if (array_key_exists($key, $_SESSION)) {
            unset($_SESSION[$key]);
        }
        return;
    }
    public static function destroy() {
        session_destroy();
        return;
    }
}
