<?php
namespace Core;

class Container
{
	public static function newContainer($controller)
	{
		$controllerObj = "App\\Controllers\\" . $controller;
		return (new $controllerObj);
	}

	public static function pageNotFound()
	{
		if (file_exists(__DIR__ . "/../app/Views/404.phtml")) {
			require_once __DIR__ . "/../app/Views/404.phtml";
		}else{
			echo "Página não encontrada";
		}
	}
	
}