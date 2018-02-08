<?php

/*
 * This is for Routes
 */

/**
 * Description of Routes
 *
 * @author soumitr
 */

Route::set('about-us', function(){
    AboutUs::createView("AboutUS");
});

Route::set('contact-us', function(){
    echo "Dude!!";
});