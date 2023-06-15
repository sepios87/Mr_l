<?php

include_once '../core/config.php';
include_once '../repositories/pdo_repository.php';
include_once '../repositories/schedule_repository.php';
$schedule_repository = new ScheduleRepository(PdoRepository::getInstance());

enum Day: string
{
    case Monday = 'lundi';
    case Tuesday = 'mardi';
    case Wednesday = 'mercredi';
    case Thursday = 'jeudi';
    case Friday = 'vendredi';
    case Saturday = 'samedi';
    case Sunday = 'dimanche';
}

enum ScheduleAction: string
{
    case Get = 'get';
    case Update = 'update';
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    case ScheduleAction::Get->value:
        $schedule = $schedule_repository->getAll();
        header('Location: ' . BASE_URL . '/contact');
        break;
    case ScheduleAction::Update->value:
        // TODO implement update
        break;
    default:
        break;
}
