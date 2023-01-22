<?php

namespace MyClass; 

class OfficeReservation
{   
    public $information;
    private  static $count = 0; 
    
    public function __construct(string $information)
    {
        $this->information = $information;
        self::$count +=1;
    }

    public static function getCount():int 
    {
        return self::$count;
    }
 
}