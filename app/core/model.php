<?php
    namespace MVC\core;
    use Dcblogdev\PdoWrapper\Database as Database;
    class model{

        public static function db(){
            $options = [
                //required
                'username' => 'root',
                'database' => 'health_center',
                //optional
                'password' => '',
                'type' => 'mysql',
                'charset' => 'utf8',
                'host' => 'localhost',
                'port' => '3306'
            ];

            return $db = new Database($options);   
        }
    }
?>