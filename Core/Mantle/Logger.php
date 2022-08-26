<?php

namespace Chungu\Core\Mantle;

use Chungu\Core\Mantle\Request;

class Logger {

    public static function log(String $msg) {

        // $log = date("D, d M Y H:i:s") . ' - ' .  Request::method()  . ' - /' . Request::uri() . ' - ' . $_SERVER['REMOTE_ADDR'] . ' - ' . "$msg" . PHP_EOL;
        $log = json_encode( [
            'level' => "info",
            'time' => date("D, d M Y H:i:s"),
            "path_req" => Request::method()  . ' - /' . Request::uri(),
            "remote_addr" => $_SERVER['REMOTE_ADDR'],
            "desc" => $msg .'}'
        ]);
        $logFile =  __DIR__ . "/Logs/logs.log";

        if (!file_exists($logFile)) {

            mkdir(__DIR__ . "/Logs");
        }

        $file = fopen($logFile, 'a+', 1);
        fwrite($file, $log);
        fclose($file);
    }
}
