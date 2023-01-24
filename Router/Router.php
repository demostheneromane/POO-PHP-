<?php

namespace Router; 
use Exceptions\RouteNotFoundExceptions; 

class Router 
{
   public $routes = array(); 

   public function register(string $path, callable $action):void 
   {
      $this->routes[$path] = $action;
   }

   public function resolve(string $uri){
      $path = explode('?',$uri)[0]; 
      $action = $this->routes[$path] ?? null; 

      if(!is_callable($action)){
          throw new RouteNotFoundExceptions();
      }
      return $action();
   }
}