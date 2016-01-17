<?php
/**
 * Created by PhpStorm.
 * User: Jes
 * Date: 17.01.2016
 * Time: 15:38
 */

class Router {
    public function getRouteMappings(){
        $mappings = array(
            '/'                      => 'defaultController',
            '/gaestebuch/newEntry'   => 'gaestebuch/newEntry',
            '/gaestebuch/showEntries'=> 'gaestebuch/showEntries');

        return $mappings;
    }
}