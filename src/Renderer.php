<?php
namespace Source; 
class Renderer 
{
    public $viewPath; 
    public function __construct(string $viewPath)
    {
        $this->viewPath = $viewPath;
    }

    public function view()
    {
       // var_dump(BASE_VIEW_PATH . $this->viewPath . '.php');
        ob_start(); 
        require BASE_VIEW_PATH . $this->viewPath . '.php'; 

        return ob_get_clean();
    }
}