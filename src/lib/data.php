<?php
namespace ModelPhp\Lib;

use Exception;
use ModelPhp\Lib\Db\Validation;
use ModelPhp\Lib\Traits\ClassInformationTrait;
use ModelPhp\Lib\Request\ClassInformationRequest;

class Data extends Validation
{
    use ClassInformationTrait;

    public $table;

    public function __construct()
    {
        Parent::__construct($this->setInformation());
    }

    public function __call($name, $arguments)
    {
        throw new Exception("Function $name is not definition!");
    }
    
    final public function setInformation()
    {
        $classInformation = new ClassInformationRequest;
        $classInformation->table = $this->table ?? $this->getClassName();
        return $classInformation;
    }
}
