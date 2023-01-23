<?php

namespace MyClass;

class ParentClass 
{
    protected static $name = 'ParentClass'; 

    public static function getName()
    {   
        //var_dump(get_class($this));
       // return $this->name; 
       return static::$name;
    }
}
