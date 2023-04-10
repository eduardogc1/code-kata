<?php

require "vendor/autoload.php";

use CodeKata\ProjectEuler\MultiplesOf3or5;

$multiplesOf3or5 = new MultiplesOf3or5(1000);
echo "Find the sum of all the multiples of 3 or 5 below 1000: " . $multiplesOf3or5->getSumOfMultiples() . PHP_EOL;
