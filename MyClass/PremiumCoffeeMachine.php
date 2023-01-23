<?php

namespace MyClass; 

class PremiumCoffeeMachine extends CoffeeMachine
{
  //protected $cups = 5;

  public function __construct(int $cups)
  {
      
     parent::__construct($cups);
      
  }
  public function select(string $selection)
   {
       switch($selection)
        {
            case 'espresso':
                $result = $this->makeEspresso();
            case 'vanilla':
                $result = $this->makeVanilla(); 
            default:
                 'erreur';
        };

        return $result;
       
   }

   public function makeVanilla()
   {
      for($i=0 ;$i<$this->cups; $i++)
      {
        echo 'Café Vanilla numero : ' . $i . ' servi ! '; 
      }
   }
}