<?php

namespace Chungu\Core\Mantle;

use Chungu\Core\Mantle\Request;

class Logger {

    public static function log(String $level, String $msg) {
        $userinfo = json_decode(file_get_contents('http://ip-api.io/json/' . $_SERVER['REMOTE_ADDR']));

        $log = json_encode([
            'level' => $level,
            'time' => date("D, d M Y H:i:s"),
            "more" => [
                "method" => Request::method(),
                "uri" => '/' . Request::uri(),
                "remote_addr" => $_SERVER['REMOTE_ADDR'],
                "region" => $userinfo->region_name,
                "country" => $userinfo->country_name,
                "city" => $userinfo->city,
                "provider" => $userinfo->organisation,
                "time_zone" => $userinfo->time_zone,
                "agent" => $_SERVER['HTTP_USER_AGENT']
            ],
            "desc" => nl2br($msg)
        ]) . PHP_EOL;

        $logFile =  __DIR__ . "/Logs/logs.log";

        if (!file_exists($logFile)) {

            mkdir(__DIR__ . "/Logs");
        }

        $file = fopen($logFile, 'a+', 1);
        fwrite($file, $log);
        fclose($file);
    }
}
