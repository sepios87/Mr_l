<?php

session_start();

class ScheduleRepository {
  private $pdoRepository;

  public function __construct($pdoRepository) {
    $this->pdoRepository = $pdoRepository;
  }

  public function getAll() {
    $shedule = $this->pdoRepository->getAll('schedule');
    $_SESSION['schedule'] = $shedule;
  }

  public function updateDay($id, $data) {
    return $this->pdoRepository->update('schedule', $id, $data);
  }
}