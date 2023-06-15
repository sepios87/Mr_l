<?php 

class Schedule {
    private $day;
    private $hourly;

    public function __construct($day, $hourly) {
        $this->day = $day;
        $this->hourly = $hourly;
    }

    public function getDay() {
        return $this->day;
    }

    public function getHourly() {
        return $this->hourly;
    }
}