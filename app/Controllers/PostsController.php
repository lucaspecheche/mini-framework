<?php
namespace App\Controllers;
use Core\BaseController;

class PostsController extends BaseController
{
	
	public function index($request = null)
	{
		$this->view->page = "Posts";
		$this->renderView('Posts/index', 'layout');
	}

	public function show($id)
	{
		echo $id;
	}
}