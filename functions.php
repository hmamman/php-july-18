<?php

function multiplier(float $num1, float $num2)
{
    return $num1*$num2;
}

function adder(float $num1, float $num2)
{
    return $num1 + $num2;
}

function getGrade(float $score) 
{
    $grade = '';
    if ($score >= 70) {
        $grade = 'A';
    } elseif ($score >= 60) {
        $grade = 'B';
    } elseif ($score >= 50) {
        $grade = 'C';
    } elseif ($score >= 45) {
        $grade = 'D';
    } else {
        $grade = 'E';
    }

    return $grade;
}
/*
echo getGrade(56) . '<br>';
$count = 1;
$end = 10;

while ($count <= $end) {
    echo "2 x {$count} = " . multiplier(2, $count) . '<br>';
    $count++;
}*/

$scores = [];

for ($i = 0; $i<=20; $i++) {
    $score = rand(30, 99);

    $scores[] = $score;
}

/*echo '<pre>';
print_r($scores);
// echo '</pre>';*/

/*foreach ($scores as $score) {
    echo getGrade($score) . '<br>';
}*/
