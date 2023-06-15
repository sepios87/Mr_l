<?php

include_once '../core/config.php';
include_once '../repositories/pdo_repository.php';

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


