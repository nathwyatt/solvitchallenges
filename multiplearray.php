<?php

$sylinder = array(0, 1.25, 2.5, 4);
$sphere = array(0, 1.25, 2.5, 4);
$stock = array(5, 0, 6, 0, 0, 7, 0, 11, 10, 0, 0, 0, 0, 0, 9, 0);

$matrix = array();

foreach ($sylinder as $i => $value1) {
    $matrix[$i] = array();

    foreach ($sphere as $j => $value2) {
        $index = $i * count($sphere) + $j;
        $matrix[$i][$j] = $stock[$index];
    }
}

// Print the table header
echo "\t";
foreach ($sylinder as $value) {
    echo $value . "\t";
}
echo "\n";

// Print the matrix
foreach ($matrix as $i => $row) {
    echo $sphere[$i] . "\t";

    foreach ($row as $value) {
        echo $value . "\t";
    }

    echo "\n";
}

?>
