<?php
$numbers = range(1,10);
function continue1($numbers) {
    foreach ($numbers as $number) {
        if ($number % 2 === 0) {
            continue;
        }
        echo "{$number} is odd </br>";
    }
}
echo '-----------continue----------- </br>';
continue1($numbers);
echo '<br/><br/>';

function continuen()
{
    $arr = ['one', 'two', 'three', 'four', 'stop', 'five'];
    for ($i = 0; $i <= 2; $i++) {
        foreach ($arr as $val) {
            if ($val == 'stop') {
                continue 2;
            }
            echo "$val<br />";
        }
    }
}
echo '-----------continue n----------- </br>';
continuen();

