<?php

namespace MyClass\Traits; 

trait NewEspressoTraits 
{
    public function makeEspresso()
    {
        return static::class . ' fait un espresso version trait';
    }
}