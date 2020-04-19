<?php

class Date {
    private $day;
    private $month;
    private $year;
    private static $MONTHS = ['jan', 'feb', 'maa', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec'];

    private function __construct($day = 1, $month = 1, $year = 2008)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }
    public static function make($day = 1, $month = 1, $year = 2008) {
        return new Date($day, $month, $year);
    }

    public function changeDay($day) {
        $this->day = $day;
    }

    public function changeMonth($month) {
        $this->month = $month;
    }

    public function changeYear($year) {
        $this->year = $year;
    }

    public function print() {
        echo $this->day.'/'.$this->month.'/'.$this->year;
    }

    public function printMonth() {
        echo $this->day.'/'.Date::$MONTHS[$this->month-1].'/'.$this->year;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getYear(): int
    {
        return $this->year;
    }
}
