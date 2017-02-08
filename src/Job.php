<?php
class Job
{
    private $when_employed;
    private $job_title;
    private $employer;

    function __construct($new_when_employed, $new_job_title, $new_employer)
    {
        $this->when_employed = $new_when_employed;
        $this->job_title = $new_job_title;
        $this->employer = $new_employer;
    }

    function getWhenEmployed() {
        return $this->when_employed;
    }

    function getJobTitle() {
        return $this->job_title;
    }

    function getEmployer() {
        return $this->employer;
    }
}
?>
