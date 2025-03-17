<?php

define("FACTOR",9/5);
define("OFFSET",32);

echo "Enter the temperature value: ";
$temperature = (float) readline();

echo "Covert to (1. Farenheit, 2. Celcius): ";
$choice = (int) readline();

switch ($choice) {
    case 1:
        $result = $temperature * FACTOR + OFFSET;
        echo "The temperature in Farenheit is $result";
        break;
    case 2:
        $result = ($temperature - OFFSET) / FACTOR;
        echo "The temperature in Celcius is $result";
        break;
    default:
        echo "Invalid choice!";
        break;
}

/*

Ostad Course Student (Laravel Batch-7)
Name: Mahinur Rahman
Phone: +880 1307 464855

*/