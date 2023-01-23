<?php

namespace MyClass; 

//final 
class CoffeeMachine 
{
   protected $cups; 
   
   public function __construct(int $cups)
   {
      $this->cups = $cups;
   }
   
   public function select(string $selection)
   {
       switch($selection)
        {
            case 'espresso':
                $result = $this->makeEspresso();
            default:
                 'erreur';
        };

        return $result;
       
   

      return $result; 
   }

   public function makeEspresso()
   {
      for($i=0 ;$i<$this->cups; $i++)
      {
        echo 'Café Espresso numero : ' . $i . ' servi ! '; 
      }
   }
}