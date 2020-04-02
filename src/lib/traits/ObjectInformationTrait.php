<?php

namespace ModelPhp\Lib\Traits;
/**
 * 
 */
trait ObjectInformationTrait
{
        
    public function __get($name)
    {
        return $this->$name;
    }
}
