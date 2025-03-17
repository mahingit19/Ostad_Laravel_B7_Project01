<?php

echo"Enter the number of units: ";
$units = (int) readline();

if ($units <= 100) {
    $bill = $units * 5;
}
else if ($units <= 200) {
    $bill = 100 * 5 + ($units - 100) * 10;
}
else {
    $bill = 100 * 5 + 100 * 10 + ($units - 200) * 15;
}

echo "The electricity bill is $" . $bill;

/*

Ostad Course Student (Laravel Batch-7)
Name: Mahinur Rahman
Phone: +880 1307 464855

*/