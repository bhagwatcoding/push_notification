<?php
// Destructer function
trait destruct {
    function __destruct(){
      if ($this->conn):
        if ($this->mysqli->close()): $this->conn = false; return true; endif;
      else: return false; endif;
    }
}
?>