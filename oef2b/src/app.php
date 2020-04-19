<?php
require_once 'util/Date.php';

$date1 = Date::make(21,3,1996);
$date1->printMonth();

$date1->changeDay(1);
$date1->printMonth();