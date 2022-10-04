<?php

require 'vendor/autoload.php';

class Database 
{
    protected $db;

    public function __construct()
    {

        try {
            $config =
                [
                    'driver'    => DB_DRIVER,
                    'host'      => DB_HOST,
                    'database'  => DB_NAME,
                    'username'  => DB_USERNAME,
                    'password'  => DB_PASSWORD,

                ];

            $this->db = (new \Pecee\Pixie\Connection(DB_DRIVER, $config))->getQueryBuilder();
                
        } catch (\Throwable $ex) {
            $this->db = $ex;
        }
    }
}