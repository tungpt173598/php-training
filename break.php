<?php
function break1()
{
    $arr = array('one', 'two', 'three', 'four', 'stop', 'five');
    foreach ($arr as $val) {
        if ($val == 'stop') {
            break;
        }
        echo "$val<br />";
    }
}
echo '-----------break----------- </br>';
break1();
echo '<br/><br/>';

function breakn()
{
    $i = 0;
    while (++$i) {
        switch ($i) {
            case 5:
                echo "At 5<br />";
                break 1;  /* Exit only the switch. */
            case 10:
                echo "At 10; quitting<br />";
                break 2;  /* Exit the switch and the while. */
            default:
                echo "Not at 5 or 10<br />";
                break;
        }
    }
}
echo '-----------break n----------- </br>';
breakn();

