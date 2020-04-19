<?php

require_once 'util/Date.php';
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$date = new Date($day, $month, $year);

$date->print();
echo '<br>';
$date->printMonth();