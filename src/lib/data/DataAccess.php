<?php
namespace ModelPhp\Lib\Data;
use ModelPhp\Lib\Request\ClassInformationRequest;
use ModelPhp\Lib\Db\Connection;

class DataAccess
{

    private ClassInformationRequest $classInformation;
    private Connection $connection;
    private $link;

    public function __construct(ClassInformationRequest $classInformation)
    {
        $this->classInformation = $classInformation;
        $this->$connection = new Connection();
        $this->$link = $this->$connection->link;

    }
    
    public function validation($classInformation)
    {

        $query = $this->$link->query("show tables like '$classInformation->table'");
        return  $query->rowCount();
    }

}
