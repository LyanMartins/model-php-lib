<?php

namespace ModelPhp\Lib\Traits;
/**
 * 
 */
trait ClassInformationTrait
{

    protected function getClassName()
    {
        return (substr(\get_class($this), strrpos(get_class($this), '\\') + 1));
    }

}
