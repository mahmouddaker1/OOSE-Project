<?php
include_once "Strategy.php";

class payWithCard implements Strategy{
  
    public function pay($amount) {
       echo "Paid" . $amount . "with Card";
    }

}
?>