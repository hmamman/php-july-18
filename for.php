<?php   

for ($i = 1; $i <=5; $i++) {
    echo "Hello World!<br>";
}

// adding all numbers from a given number

$sum = 0;
$result = 0;
$start = 1;
$end = 10;
for ($i = $start; $i <= $end; $i++) {
    for ($k=1; $k <= 10;$k++) {
        $result = $sum;
        $sum = $i * $k;
        echo "{$i} x {$k} = {$sum}<br>";
    }
}

echo "The sum of numbers from {$start} 
to {$end} is {$sum}";