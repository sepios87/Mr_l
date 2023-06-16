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

    public function getId()
    {
        return $this->id;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function getHourly()
    {
        return $this->hourly;
    }
    
    public function setHourly($hourly)
    {
        return $this->hourly = $hourly;
    }

    public function __toString()
    {
        return $this->id . ' ' . $this->day . ' ' . $this->hourly;
    }
    
    public function toArray()
    {
        return [
            'id' => $this->id,
            'day' => $this->day,
            'hourly' => $this->hourly
        ];
    }
}
