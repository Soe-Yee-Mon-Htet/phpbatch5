<?php
require_once("config/access.php");

class Database
{
    private $dbhost = DB_HOST;
    private $dbuser = DB_USER;
    private $dbpassword = DB_PASSWORD;
    private $dbname = DB_NAME;

    private $conn;
    private $error;
    private $dbconnected = false;

    private $qry;


    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->dbuser, $this->dbpassword);
            $this->conn->setAttribute(PDO::ATTR_ERROMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error =" . $e->getMessage();
        }
    }

    public function geterror()
    {
        return $this->error;
    }

    // Check Database Connected
    public function isconnected()
    {
        return $this->dbconnected;
    }

    // prepare (encrypt)
    public function dbquery($query)
    {
        $this->qry = $this->conn->prepare($query);
    }

    // bind-param(decrypt)
    public function dbbind($param, $value, $type = null)
    {

    }

    public function dbexecute()
    {
        return $this->qry->execute();
    }

    // get all resultes ass array object
    public function getmultidata()
    {
        $this->dbexecute();
        // return $this->qry->fetchAll(PDO::FETCH_ASSOC);
        return $this->qry->fetchAll(PDO::FETCH_OBJ);
    }

    public function getsingledata()
    {
        $this->dbexecute();
        // return $this->qry->fetchAll(PDO::FETCH_ASSOC);
        return $this->qry->fetch(PDO::FETCH_OBJ);
    }

    // get Database Row Count
    public function dbrowcount()
    {
        return $this->qry->rowCount();
    }

}





?>
CREATE TABLE IF NOT EXISTS articles(
id INT AUTO_INCREMENT NOT NULL PRIMARY KEY;
title VARCHAR(255) NOT NULL;
content TEXT,
user_id INT,
);

CREATE TABLE IF NOT EXISTS users(
id INT AUTO_INCREMENT NOT NULL PRIMARY KEY;
name VARCHAR(255) NOT NULL;
email VARCHAR(255),
password VARCHAR(255),
);

DESC articles;
DESC users;

SHOW INDEX FROM articles;
SHOW INDEX FROM users;


