<?php

include 'inc/calc.inc.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$cal = $_POST['cal'];

$calculater = new calc($num1, $num2, $cal);
echo $calculater->calcMethod();
