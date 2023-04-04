<?php
$a = 2;
if ($a == 2) {
    echo 'a';
} elseif ($a == 2 || $a == 3) {
    echo 'b';
} elseif ($a == '2') {
    echo 'c';
} else {
    echo 'd';
}