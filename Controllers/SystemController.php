<?php

namespace Chungu\Controllers;

class SystemController extends Controller {
    public function index() {

        $log = "Core/Mantle/Logs/logs.log";

        if (!file_exists($log)) {
            $data = ["File Does not exist, call the developer!"];
            exit;
        }
        $data = file_get_contents($log);

        return view('log', [
            'logs' => $data
        ]);
    }
    public function test() {
        return view('test');
    }
}
