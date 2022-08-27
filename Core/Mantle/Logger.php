<?php

namespace Chungu\Core\Mantle;

use Chungu\Core\Mantle\Request;

class Logger {

    public static function log(String $level, String $msg) {

        // $log = date("D, d M Y H:i:s") . ' - ' .  Request::method()  . ' - /' . Request::uri() . ' - ' . $_SERVER['REMOTE_ADDR'] . ' - ' . "$msg" . PHP_EOL;
        $log = json_encode( [
            'level' => $level,
            'time' => date("D, d M Y H:i:s"),
            "more" => [
                "method" => Request::method(),
                "uri" => '/' . Request::uri(),
                "remote_addr" => $_SERVER['REMOTE_ADDR'],
                "agent" => $_SERVER['HTTP_USER_AGENT']
            ],
            "desc" => $msg
        ]). PHP_EOL;

        $logFile =  __DIR__ . "/Logs/logs.log";

        if (!file_exists($logFile)) {

            mkdir(__DIR__ . "/Logs");
        }

        $file = fopen($logFile, 'a+', 1);
        fwrite($file, $log);
        fclose($file);
    }
}
