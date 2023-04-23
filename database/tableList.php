<?php
// Checkout table List
trait tableList{
    function tableList(){
      $sql = "SHOW TABLES IN $this->name";
      $query = $this->mysqli->query($sql);
      if ($query): $this->result = $query->fetch_all(MYSQLI_ASSOC); return true;
      else: array_push($this->result, $this->mysqli->error); return false;
      endif;
    }
}
?>