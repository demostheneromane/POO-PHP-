<?php
namespace Exceptions; 

class RouteNotFoundExceptions extends \Exception
{
   public $message = 'cette route n\'existe pas ';
}