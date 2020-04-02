<?php
namespace ModelPhp\Lib\Db;

use PDO;
use ModelPhp\Lib\Traits\ObjectInformationTrait;

class Connection 
{
    use ObjectInformationTrait;

    private $dsn;
    private $username;
    private $password;
    protected $link;

    public function __construct()
    {
        $this->dsn = 'mysql:dbname=SNTxPiIcHk;host=remotemysql.com';
        $this->username = 'SNTxPiIcHk';
        $this->password = 'dKS21KYEsS';
        $this->connect();
    }

    private function connect()
    {
        try{
            $this->link = new \PDO($this->dsn, $this->username, $this->password);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
        
    }
    public function __wakeup()
    {
        $this->connect();
    }
    
}
