<?php
function normalSwitch()
{
    $i = 2;
    switch ($i) {
        case 0:
            echo "i equals 0";
            break;
        case 1:
            echo "i equals 1";
            break;
        case '2':
            echo "i equals 2";
            break;
        default:
            echo 'not match any cases';
    }
}
echo '-----------normal switch----------- </br>';
normalSwitch();
echo '<br/><br/>';

// Trường hợp có nhiều case xử lý cùng 1 việc
function duplicateCaseSwitch()
{
    $i = 5;
    switch ($i) {
        case 1:
        case 0:
            echo "i < 2";
            break;
        case 2:
            echo "i equals 2";
            break;
        default:
            echo 'not match any cases';
    }
}
echo '-----------duplicateCaseSwitch----------- </br>';
duplicateCaseSwitch();
echo '<br/><br/>';

function normalMatch()
{
    $i = 2;
    $message = match ($i) {
        1 => 'i = 1',
        2 => 'i = 2',
        default => 'not match any'
    };
    echo $message;
}

echo '-----------normalMatch----------- </br>';
normalMatch();
echo '<br/><br/>';
function duplicateCaseMatch()
{
    $i = 5;
    $message = match ($i) {
        1,2,3,4 => 'i < 5',
        '5' => 'match string',
        5 => 'i = 5',
        default => 'not match any'
    };
    echo $message;
}

echo '-----------duplicateCaseMatch----------- </br>';
duplicateCaseMatch();
echo '<br/><br/>';

// check hơn kém với switch

function notEqualSwitch()
{
    $i = 10;
    switch (true) {
        case $i < 5:
            echo "i < 5";
            break;
        case $i < 10:
            echo "5 <= i < 10";
            break;
        case $i >= 10:
            echo 'i >= 10';
            break;
    }
}

echo '-----------notEqualSwitch----------- </br>';
notEqualSwitch();
