<?php

namespace Chungu\Core\Mantle;

class Middleware {

    protected $middleware = [
        'auth', 'admin'
    ];

    public function middleware($middleware) {
        if (!in_array($middleware, $this->middleware)) {
            throw new \Exception("This {$middleware} doesn't exist");
        }
        $this->$middleware();
    }

    private function auth() {
        if (!auth()) {
            return redirect('/login');
        }
    }
    private function admin() {
        if (!isAdmin()) {
            return redirectback();
        }
    }
}
