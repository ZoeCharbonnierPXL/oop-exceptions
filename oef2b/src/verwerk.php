<?php

require_once 'util/Date.php';
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$date = Date::make($day, $month, $year);
$date->printMonth();

echo '<br>';

$date->changeDay(1);
$date->changeMonth(1);
$date->changeYear(2000);
$date->printMonth();