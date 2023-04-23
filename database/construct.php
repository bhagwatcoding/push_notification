<?php
// Constructer function
trait construct{
    function __construct(){
      if(!$this->conn):
        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->name);
        $this->conn = true;
        if($this->mysqli->connect_error): array_push($this->result, $this->mysqli->connect_error); return false; endif;
      else: return true; endif;
    }
}
?>