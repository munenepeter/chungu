<?php

namespace Chungu\Controllers;

class SystemController extends Controller {
    public function __construct() {
      //  $this->middleware('auth');
    }
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

    public function new_log() {

        $log = "Core/Mantle/Logs/logs.log";

        if (!file_exists($log)) {
            $data = ["File Does not exist, call the developer!"];
            exit;
        }
        $data = file_get_contents($log);

        $logs = explode(PHP_EOL,$data);

        array_pop($logs);

        return view('logger', [
            'logs' => array_reverse($logs)
        ]);
    }

    public function system_activity()
    {
        return view('system-activity');
    }

    public function test() {
        return view('test');
    }
    public function test_1($one) {
        return view('test',[
            'one' => $one
        ]);
    }
    public function test_2($one, $two) {
        return view('test',[
            'one' => $one,
            'two' => $two
        ]);
    }
   
    public function test_category($category) {

        return view('test', [
            'products' =>  $this->getProducts($category)
        ]);
    }
}
