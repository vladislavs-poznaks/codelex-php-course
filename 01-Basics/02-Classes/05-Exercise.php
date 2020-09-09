<?php

class Date {
    protected $day;
    protected $month;
    protected $year;

    public function __construct($day, $month, $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function setDay($day)
    {
        $this->day = $day;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function setMonth($month)
    {
        $this->month = $month;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function displayDate() {
        echo "$this->month/$this->day/$this->year\n";
    }

}

$date = new Date(9, 9, 2020);

function dateTest(Date $date) {
    $date->displayDate();
}

dateTest($date);