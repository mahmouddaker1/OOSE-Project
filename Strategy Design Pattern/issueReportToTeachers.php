<?php
include_once "Strategy.php";

class issueReportToTeacher implements Strategy{
  
    public function issue_report($date) {
       echo "Report is issued";
    }

}
?>