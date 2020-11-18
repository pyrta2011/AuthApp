<?php


namespace App\Services;


class App
{
    public static function start() {
        self::libs();
        self::db();
    }
    public static function libs() {
        $config = require_once "config/libs.php";

        foreach ($config['libs'] as $lib) {
            require_once "libs/" . $lib . ".php";
        }
    }
    public static function db() {
        $config = require_once "config/db.php";

        if ($config['enable']) {
            \R::setup( 'mysql:host='. $config['host'] .'; 
                    dbname='. $config['db_name'] .'', $config['username'], $config['password'] );
            if (!\R::testConnection()) {
                die('Error database connection');
            }
        }
    }
}