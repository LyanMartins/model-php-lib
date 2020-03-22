<?php
namespace ModelPhp\Lib;
use ModelPhp\Lib\Db\Connection;

class Data extends Connection
{
    public $table;

    public function __construct(){
        $this->table = get_class($this);
        
        Parent::__construct();
    }
}
