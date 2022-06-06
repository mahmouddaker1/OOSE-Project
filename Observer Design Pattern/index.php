<?php

include_once 'Subject.php';
include_once 'Observer1.php';
include_once 'Observer2.php';
include_once 'Observer3.php';

$subject = new Subject();
new Observer1($subject);
new Observer2($subject);
new Observer3($subject);

?>