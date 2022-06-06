<?php
include_once "BookFeesAddon.php"

class BookFeesAddon extends Addon {
    public function calculate_amount($amount) {
        echo "Calculating fees after adding book fees";
    }
}

?>