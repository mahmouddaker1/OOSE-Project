<?php
include_once 'context.php';

$con = new context(new payWithCard());
$con2 = new context(new issueReportToTeachers());
?>