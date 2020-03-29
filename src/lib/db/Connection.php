<?php

use PDO;
namespace ModelPhp\Lib\Db;

class Connection 
{

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
        //var_dump($this->dsn);
        
    }
    public function __wakeup()
    {
        $this->connect();
    }
    
}
