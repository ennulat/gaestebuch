<?php
/**
 * Created by PhpStorm.
 * User: Jes
 * Date: 17.01.2016
 * Time: 15:26
 */

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
/*use controller\StandardController;
use controller\Gaestebuch;*/
require_once '../core/Router.php';

class frontController {

    public function run(){

        $request = Request::createFromGlobals();
        $pathInfo = $request->getPathInfo();
        $router = new Router();
        $routeMappings = $router->getRouteMappings();

        if(isset($routeMappings[$pathInfo]))
        {
            $destRoute = $routeMappings[$pathInfo];
            $pathArgs = explode('/', $destRoute);
            if(count($pathArgs) > 1) {
                $controller = $this->create_instance($pathArgs[0], $pathArgs[1]);
            }


        }


        $controller = new \controller\StandardController\StandardController();


        $controller->index();



    }

    private function create_instance($class, $params) {
        die(ucfirst($class));
        $reflection_class = new ReflectionClass(ucfirst($class));
        return $reflection_class->newInstanceArgs($params);
    }

}