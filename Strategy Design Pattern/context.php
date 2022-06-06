<?php
include_once "Strategy.php";

class context {
    private $strategy;
    
    function __construct($strategy) {
        $this->strategy = $strategy;
    }

    public function executeStrategy(){
        $this->strategy->pay();
    }
}
?>