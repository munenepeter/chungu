<?php

namespace Chungu\Core\Database;

class Connection {
    //make a connection to the DB
    public static function make($config) {

        try {
            if (is_dev()) {
                return new \PDO(
                    $config['connection'] . ';dbname=' . $config['name'],
                    $config['username'],
                    $config['password'],
                    $config['options']
                );
            } else {
                // return new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
                return new \PDO("sqlite:" . $config['path']);
            }
        } catch (\PDOException $e) {
            //if anything happens throw an error
            abort($e->getMessage(), (int)$e->getCode());
        }
    }
}
