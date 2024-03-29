<?php

    namespace MVC\core;

    class app
    {
        private $controller = 'home';
        private $method = 'index';
        private $params = [];

        public function __construct()
        {
            $this->url();
            $this->render();
        }

        private function url()
        {
            if(!empty($_SERVER['QUERY_STRING']))
            {
                $url = explode("/" , $_SERVER['QUERY_STRING']);
                // this sentence for check if controller is setting or no ..
                $this->controller = isset($url[0])? $url[0]."controller" : "homecontroller";
                
                $this->method = isset($url[1]) ? $url[1] : "index";
                
                //print_r($this->controller);
                //echo "<br>";
                
                unset($url[0] , $url[1]);

                $this->params = array_values($url);
            }
            else{
                $this->controller = 'homecontroller';
                $this->method = 'index';
            }
        }
        private function render()
        {
            $controller = 'MVC\controller\\'.$this->controller; //this a class that already exists not just name ..
            //echo $controller; 
            if (class_exists($controller))
            {
                $controller = new $controller;
                if(method_exists($controller , $this->method))
                {
                    call_user_func_array(array($controller,$this->method) , $this->params);
                }
                else{
                    echo "mesh tamammm";
                }
            }
            else{
                echo "class not exists";
            }
        }
    }

?>
