<?php
include_once "Strategy.php";

class issueReportToStudents implements Strategy {

    public function issue_report($date) {
        echo "Report is issued";
    }

}
?>