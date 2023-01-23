<?php

namespace MyClass; 

abstract class Vehicule 
{
    protected $marque;

    public function __construct(string $marque){
        $this->marque = $marque;
    }

    public function roule():string 
    {
        return 'je roule ';
    }

    public function marque():string 
    {
        return 'je roule en ' . $this->marque . '.';
    }
}