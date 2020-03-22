<?php

namespace ModelPhp\Lib\Traits;
/**
 * 
 */
trait ClassInformation
{

    protected function getModelName()
    {
        return (substr(\get_class($this), strrpos(get_class($this), '\\') + 1));
    }


}
