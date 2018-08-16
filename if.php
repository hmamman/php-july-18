<?php

$score = $_GET['s'] ?? 50;

$grade = '';

if ((float) $score <= 100) {

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

    echo "The grade of a score {$score} is {$grade}.";

} else {
    echo 'Invalid score';
}

