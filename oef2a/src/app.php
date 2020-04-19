<?php
require_once 'util/Date.php';
require_once 'util/DateException.php';

try {
    $date1 = new Date(21,3,2021);
    $date1->printMonth();

    $date2 = new Date(21,0,1996);
    $date2->printMonth();
} catch (DateException $exception) {
    print($exception);
}
