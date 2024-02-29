<?php
    define("SIGN" , DIRECTORY_SEPARATOR);
    define("ROOT" , dirname(__DIR__));
    define("APP", ROOT.SIGN."app");
    define("CONFIG", APP.SIGN."config");
    define("CONTROLE", APP.SIGN."controller");
    define("CORE", APP.SIGN."core");
    define("MODELS", APP.SIGN."models");
    define("VIEW", APP.SIGN."view");
    
    require_once ('../vendor/autoload.php');
    $app = new MVC\core\app();

?>