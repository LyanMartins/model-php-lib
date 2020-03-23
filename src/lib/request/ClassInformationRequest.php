<?php
namespace ModelPhp\Lib\Request;

class ClassInformationRequest
{
    private $table;

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

}
