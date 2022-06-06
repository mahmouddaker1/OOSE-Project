<?php
include_once "Strategy.php";

class payWithVodafoneCash implements Strategy {

    public function pay($amount) {
        echo "Paid" . $amount . "with Vodafone Cash";
    }

}
?>