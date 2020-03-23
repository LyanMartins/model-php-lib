<?php
namespace ModelPhp\Lib\Db;

use ModelPhp\Lib\Request\ClassInformationRequest;
class Validation extends Connection
{
    public function __construct(ClassInformationRequest $classInformation){
        var_dump($classInformation->table);
        Parent::__construct();
    }

}
