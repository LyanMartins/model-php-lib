<?php
namespace ModelPhp\Lib;
use ModelPhp\Lib\Db\Validation;

class Data extends Validation
{
    public $table;

    public function __construct(){
        $this->table = get_class($this);
        
        Parent::__construct();
    }
}
