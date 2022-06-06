<?php

abstract class Observer {
    public $subject;
    abstract public function update();
}

?>