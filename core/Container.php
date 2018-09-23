<?php
namespace Core;

class Container
{
	public static function newContainer($controller)
	{
		$controllerObj = "App\\Controllers\\" . $controller;
		return (new $controllerObj);
	}
	
}