<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Route
 *
 * @author soumitr
 */
class Route {
    //put your code here
    
    private static $validRoutes = [];
    
    public static function set($route, $function) {
        self::$validRoutes[] = $route;
        if ( $_GET['path'] == $route ) {
            $function->__invoke();
        }
    }
            
}
