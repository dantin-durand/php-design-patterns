<?php

namespace App\Singleton;

use PDO;

class DB
{
    private static $instance;


    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function raw()
    {

        try {
            return new PDO("{$_ENV['DB_CONNECTION']}:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}
