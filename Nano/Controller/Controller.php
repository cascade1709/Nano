<?php

/*
 * Base Controller Class.
 */

/**
 * Description of Controller
 *
 * @author soumitr
 */
class Controller {

    public static function createView($viewName) {
        require_once 'Views/'.$viewName.'.php';
    }

}
