<?php

$route[] = ['/', 'HomeController@index'];
$route[] = ['/get', 'HomeController@index'];
$route[] = ['/post/{id}/show', 'PostsController@show'];
$route[] = ['/get/{id}/print', 'HomeController@index'];


return $route;