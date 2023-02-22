<?php
$first = array(0, 1.25, 2.5, 4);
$second = array(0, 1.25, 2.5, 4);
$matrix = array(5, 0, 6, 0, 0, 7, 0, 11, 10, 0, 0, 0, 0, 0, 9, 0);
$matrix = array_chunk($matrix, 4);

echo str_pad('', 6) . '|' . implode('|', $first) . "\n";
echo str_pad('', 6, '-') . '|' . str_pad('', (count($first) * 4) - 1, '-') . "\n";

foreach ($second as $i => $s) {
  echo str_pad($s, 6) . '|';
  foreach ($matrix[$i] as $val) {
    echo str_pad($val, 4, ' ', STR_PAD_LEFT) . '|';
  }
  echo "\n";
}
?>
