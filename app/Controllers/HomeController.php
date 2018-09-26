<?php
namespace App\Controllers;
use Core\BaseController;

class HomeController extends BaseController
{
	
	
	public function index($request = null)
	{
		$this->setPageTitle('Home');
		$this->view->page= "Home";
		$this->renderView('Home/index', 'layout');

	}
}