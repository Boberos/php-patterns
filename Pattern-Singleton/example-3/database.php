<?php
class database {
     
    private $dbName = null, $dbHost = null, $dbPass = null, $dbUser = null;
     
    public function __construct($dbDetails = array()) {
         
        $this->dbName = $dbDetails['db_name'];
        $this->dbHost = $dbDetails['db_host'];
        $this->dbUser = $dbDetails['db_user'];
        $this->dbPass = $dbDetails['db_pass'];
 
        $this->dbh = new PDO('mysql:host='.$this->dbHost.';dbname='.$this->dbName, $this->dbUser, $this->dbPass);
         
    }
}