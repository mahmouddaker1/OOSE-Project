<?php
include_once "StudentFees.php"

class StandardFees implements StudentFees {
    public function calculate_amount($school_year) {
        echo "Calculating fees";
    }
}

?>