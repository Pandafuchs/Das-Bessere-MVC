<?php

require_once 'class/pdosingleton.php';

abstract class AbstractModel {
    
    protected $connection;

    public function __construct() {
        $this->connection = PDOSingleton::connection();
    }
}
?>
