<?php

include_once '../core/config.php';
include_once '../repositories/pdo_repository.php';
include_once '../models/schedule.class.php';
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

if (isset($_GET['redirect'])) {
    $redirect = $_GET['redirect'];
}

switch ($action) {
    case ScheduleAction::Get->value:
        $schedule = $schedule_repository->getAll();
        header('Location: ' . BASE_URL . '/'. $redirect);
        break;
    case ScheduleAction::Update->value:
        if (isset($_POST['day1']) && isset($_POST['day2']) && isset($_POST['day3']) && isset($_POST['day4']) && isset($_POST['day5']) && isset($_POST['day6']) && isset($_POST['day7'])) {
            $schedule = $_SESSION['schedules'];

            $schedule[0]->setHourly($_POST['day1']);
            $schedule[1]->setHourly($_POST['day2']);
            $schedule[2]->setHourly($_POST['day3']);
            $schedule[3]->setHourly($_POST['day4']);
            $schedule[4]->setHourly($_POST['day5']);
            $schedule[5]->setHourly($_POST['day6']);
            $schedule[6]->setHourly($_POST['day7']);

            $values = array();
            foreach ($schedule as $onSchedule) {
                array_push($values, $onSchedule->toArray());
            }
            $retour = $schedule_repository->UpadateSchedule($values);

            var_dump($retour);
            
        }

        break;
    default:
        break;
}
