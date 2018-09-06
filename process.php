<?php
function multiplier(float $num1, float $num2)
{
    return $num1*$num2;
}
$f = $_POST['first_number'];
$s = $_POST['second_number'];

echo multiplier($f, $s);