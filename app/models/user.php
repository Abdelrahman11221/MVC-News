<?php
namespace MVC\models;
use MVC\core\model;
class user extends model{

    public function getdata()
    {
        $data = model::db()->rows("SELECT * FROM user");
        return $data;
    }
    public function user_data($name , $password)
    {
        $data = model::db()->row("SELECT * FROM user WHERE `name`='$name' && `password`='$password'");
        return $data;
    }

    public function inserting($name , $email , $password)
    {
        $insert = model::db()->insert('user', ['name' => $name , 'email' => $email , 'password' => $password]);
    }
}
?>