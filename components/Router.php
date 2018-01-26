<?php
/**
 * Created by PhpStorm.
 * User: Maxim Tokar`
 * Date: 26.01.2018
 * Time: 14:47
 */

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath=ROOT.'/config/routes.php';
        $this->routes = include_once($routesPath);
    }
    public function run(){
        // Получить строку запроса
        $uri = $this->getURI();
        // Проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path){
            if(preg_match("~$uriPattern~",$uri)){

                $internalRoute = preg_replace("~$uriPattern~",$path,$uri);
                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName='action'.ucfirst(array_shift($segments));

                $parameters = $segments;

                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                if(file_exists($controllerFile)){
                    include_once ($controllerFile);
                }

                $controllerObject = new $controllerName;

                $result = call_user_func_array(array($controllerObject,$actionName),$parameters);

                if($result != null){
                    break;
                }
            }
        }
        // Если есть совпадения определить какой контроллер и action обрабатывает запрос
        // Подключить файл класса-контроллера
        // Создать объект, вызватьм метод (т.е. action)
    }
    /* method returns string */
    private function getURI(){
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }
}