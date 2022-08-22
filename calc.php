<?php
// include calc controller file
include 'include/calc.inc.php';


// operation variables
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$oper = $_POST['oper'];

// instantiate calculator object 
$calulator = new Calc($num1, $num2, $oper);
echo $calulator->caculate();