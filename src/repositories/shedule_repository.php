<?php

class ScheduleRepository {
  private $pdoRepository;

  public function __construct($pdoRepository) {
    $this->pdoRepository = $pdoRepository;
  }

  public function getAll() {
    return $this->pdoRepository->getAll('schedule');
  }

  public function updateDay($id, $data) {
    return $this->pdoRepository->update('schedule', $id, $data);
  }
}