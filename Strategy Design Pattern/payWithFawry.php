<?php
include_once "Strategy.php";

class payWithFawry implements Strategy {

    public function pay($amount) {
        echo "Paid" . $amount . "with Fawry";
    }

}
?>