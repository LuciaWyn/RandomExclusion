<?php
require_once __DIR__.'/Random/randomExclusion.php';

use Random\randomExclusion;

$random = new randomExclusion;

$exclude1 = array(6, 9, 7, 5);
$exclude2 = array(1, 3, 9, 10);

echo $random->randommy(3, 9, $exclude1);
echo "\n";
echo $random->randommy(2, 11, $exclude1);
echo "\n";
echo $random->randommy(8, 15, $exclude2);
echo "\n";
echo $random->randommy(7,19, $exclude2);
echo "\n";
?>