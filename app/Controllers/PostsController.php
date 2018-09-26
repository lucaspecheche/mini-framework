<?php
namespace App\Controllers;
use Core\BaseController;
use App\Models\Post;
use Core\DataBase;

class PostsController extends BaseController
{
	
	public function index($request = null)
	{
		$model = new Post(DataBase::getDatabase());
		$posts = $model->All();
		//$this->view->page = "Posts";
		//$this->renderView('Posts/index', 'layout');
	}

	public function show($id)
	{
		echo $id;
	}
}