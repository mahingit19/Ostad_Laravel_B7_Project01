<?php

define("USERNAME","admin");
define("PASSWORD","12345");

echo"Enter your username: ";
$username = readline();

echo"Enter your password: ";
$password = readline();

if ($username === USERNAME && $password === PASSWORD) {
    echo "Welcome to the system!";
}
else {
    echo "Invalid username or password!";
}

/*

Ostad Course Student (Laravel Batch-7)
Name: Mahinur Rahman
Phone: +880 1307 464855

*/