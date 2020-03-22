<?php

namespace ModelPhp\Lib\Db;

class Connection extends \PDO
{

    private $dsn;
    private $username;
    private $password;

    public function __construct()
    {
        
        $this->dsn = '' ;
        $this->username = '$username';
        $this->password = '$password';
        $this->connect();
    }

    private function connect()
    {
        $this->link = new PDO($this->dsn, $this->username, $this->password);
    }
    
}
