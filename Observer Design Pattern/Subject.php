<?php

Class Subject {
    private $Observers = array();
    private $state;

    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
        $this->notifyAllObservers();
    }

    public function attach($observer) {
        array_push($this->Observers, $observer);
    }

    public function notifyAllObservers() {
        foreach($this->observers as $obs) {
            $obs->update();
        }
    }

}

?>