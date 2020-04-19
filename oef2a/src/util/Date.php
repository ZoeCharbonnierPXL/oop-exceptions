<?php

class Date {
    private $day;
    private $month;
    private $year;
    private static $MONTHS = ['jan', 'feb', 'maa', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec'];

    public function __construct($day = 1, $month = 1, $year = 2008)
    {
        if($day < 1 || $day > 31) {
            throw new \DateException("Invalid day");
        }
        $this->day = $day;
        if($month < 1 || $month > 12) {
            throw new \DateException("Invalid month");
        }
        $this->month = $month;
        if($year < 1900 || $year > date("Y")) {
            throw new \DateException("Invalid year");
        }
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

    public function setDay(int $day)
    {
        $this->day = $day;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function setMonth(int $month)
    {
        $this->month = $month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year)
    {
        $this->year = $year;
    }
}
