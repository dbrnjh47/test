<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$items = ['where', 'is', 'my', 'money'];
$sum = 0;
$status = 0;

for ($i = 0; $i <= 100; $i++) {
    a($i);
    b($i);
    c($i);
    answer($i);
}

$items = json_encode($items);
print_r("<br>{$items}");
print_r("<br>{$sum}");

function a($i)
{
    if (($i % 4) == 0) {
        global $status; 
        $status = 'a';
    }
}

function b($i)
{
    if (($i % 5) == 0) 
    {
        global $status; 
        $status = 'b';
    }
}

function c($i)
{
    if (($i % 4) == 0 && ($i % 5) == 0)
    {
        global $status; 
        $status = 'c';
    }
}

function answer($i)
{
    global $status, $sum, $items;
    switch ($status) {
        case 'a':
            echo ('1 ');
            break;
        case 'b':
            $sum += $i;
            break;
        case 'c':
            shuffle($items);
            break;
    }
}
