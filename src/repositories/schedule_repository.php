<?php

session_start();

class ScheduleRepository
{
  private $pdoRepository;

  public function __construct($pdoRepository)
  {
    $this->pdoRepository = $pdoRepository;
  }

  public function getAll()
  {
    $shedules = $this->pdoRepository->getAll('schedule');
    $shedules = array_map(function ($shedule) {
      return new Schedule($shedule['id'], $shedule['day'], $shedule['hourly']);
    }, $shedules);
    $_SESSION['schedules'] = $shedules;
  }

  public function updateDay($id, $data)
  {
    return $this->pdoRepository->update('schedule', $id, $data);
  }

  public function UpadateSchedule($shedule)
  {
    return $this->pdoRepository->UpdateMultiple('schedule', $shedule);
  }
}
