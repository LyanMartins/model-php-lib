<?php
namespace ModelPhp\Lib\Db;

use ModelPhp\Lib\Request\ClassInformationRequest;
class Validation extends Connection
{
    private ClassInformationRequest $classInformation;

    public function __construct(ClassInformationRequest $classInformation)
    {
        Parent::__construct();
        $this->classInformation = $classInformation;
        $this->validation($this->classInformation);
    }

    final public function validation($classInformation)
    {
        $return = $this->link->query("show tables like '$classInformation->table'");
        switch($return->rowCount()){
            case 0: throw new Exception("table '$classInformation->table' does not exist"); break;
            case 2: throw new Exception("table '$classInformation->table' is ambiguous"); break;
        }
    }


}
