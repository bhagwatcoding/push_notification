<?php
// database Directory all file include
foreach (glob("database/*.php") as $file): require_once $file; endforeach;

// database class start
class Database{
    // database details
    private $host = db::host;
    private $user = db::user;
    private $pass = db::pass;
    private $name = db::name;

    // for function constaint
    private $mysqli = "";
    private $result = array();
    private $conn = false;

    use construct, insert, update, delete, select, pagination, sql, tableExits, tableList, result, result, destruct, call;
}

?>