<?php
include_once "StudentFees.php"

abstract class Addon implements StudentFees {
    protected $decorated_fees;

    public function __construct(StudentFees $decorated_fees)
    {
        $this->decorated_fees = $decorated_fees;
    }

    public function calculate_amount($school_year) {
        return $this->decorated_fees->calculate_amount();
    }
}

?>