<?php
namespace ModelPhp\Lib\Db;

use ModelPhp\Lib\Request\ClassInformationRequest;
use ModelPhp\Lib\Data\DataAccess;

class Validation extends DataAccess 
{
    private ClassInformationRequest $classInformation;

    public function __construct(ClassInformationRequest $classInformation)
    {
        Parent::__construct($classInformation);
        $this->classInformation = $classInformation;
        $this->validation($this->classInformation);
    }

    final public function validation($classInformation)
    {
        $return = Parent::validation($classInformation);
        
        switch($return){
            case 0: throw new Exception("table '$classInformation->table' does not exist"); break;
            case 2: throw new Exception("table '$classInformation->table' is ambiguous"); break;
        }
    }


}
