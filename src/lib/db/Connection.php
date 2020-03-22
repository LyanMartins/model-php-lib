<?php

namespace ModelPhp\Lib\Db;

class Connection extends \PDO
{

    private $dsn;
    private $username;
    private $password;
    private $link;

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
    
}
