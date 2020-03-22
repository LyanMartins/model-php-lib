<?php
namespace ModelPhp\Lib;
use ModelPhp\Lib\Db\Validation;
use ModelPhp\Lib\Traits\ClassInformation;

class Data extends Validation
{
    use ClassInformation;

    public $table;

    public function __construct(){
        $this->table = get_class($this);
        var_dump($this->getModelName());
        Parent::__construct();
    }

    public function __call($name, $arguments)
    {
        echo "Function $name is not definition!";
        throw new Exception("Function $name is not definition!");
    }
}
