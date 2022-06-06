<?php

    include_once 'Observer.php';
    Class Observer2 extends Observer {
        public function update() {
            
        }
        public function __construct($subject) {
            $this->subject = $subject;
            $this->subject->attach($this);
        }
    }

?>