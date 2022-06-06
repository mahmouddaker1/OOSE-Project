<?php

    include_once 'Observer.php';
    Class Observer3 extends Observer {
        public function update($subject) {
            decbin($this->$subject->getState());
        }

        public function __construct($subject) {
            $this->subject = $subject;
            $this->subject->attach($this);
        }
    }

?>