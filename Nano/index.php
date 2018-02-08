<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './Routes.php';

//echo $_GET['path'];

function __autoload($class_name) {
    if (file_exists('./Classes/' . $class_name . '.php')) {
        require_once './Classes/' . $class_name . '.php';
    }
    elseif (file_exists('./Controller/' . $class_name . '.php')) {
        require_once './Controller/' . $class_name . '.php';
    }
}
