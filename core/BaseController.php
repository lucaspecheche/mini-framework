<?php
namespace Core;

abstract class BaseController //Não pode ser estanciada, somente herdada
{
	
	protected $view; //só pra quem herdar
	private $viewPath;
	private $layoutPath;
	private $pageTitle = null;

	public function __construct()
	{
		$this->view = new \stdClass;
	}

	protected function renderView($viewPath, $layoutPath = false)
	{
		$this->viewPath = $viewPath;
		$this->layoutPath = $layoutPath;
		$layoutPath ? $this->layout() : $this->content();
	}

	protected function content()
	{
		if(file_exists(__DIR__ . "/../app/Views/{$this->viewPath}.phtml")){
			require_once __DIR__ . "/../app/Views/{$this->viewPath}.phtml";
		}else{
			echo "Error: View não encontrada";
		}
	}

	protected function layout()
	{
		if(file_exists(__DIR__ . "/../app/Views/{$this->layoutPath}.phtml")){
			require_once __DIR__ . "/../app/Views/{$this->layoutPath}.phtml";
		}else{
			echo "Error: Layout não encontrado";
		}
	}

	protected function setPageTitle($pageTitle)
	{
		$this->pageTitle = $pageTitle;
	}

	protected function getPageTitle($separator = null)
	{
		return $this->pageTitle;
	}
}