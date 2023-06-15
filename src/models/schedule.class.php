<?php

class Schedule
{
    private $id;
    private $day;
    private $hourly;

    public function __construct($id, $day, $hourly)
    {
        $this->id = $id;
        $this->day = $day;
        $this->hourly = $hourly;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function getHourly()
    {
        return $this->hourly;
    }

    public function __toString()
    {
        return $this->id . ' ' . $this->day . ' ' . $this->hourly;
    }
}
