<?php
// Get restult
trait result{
    function getResult(){
      $val = $this->result;
      $this->result = array();
      return $val;
    }
}
?>