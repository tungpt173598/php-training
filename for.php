<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

/* example 2 */
echo "</br></br>";
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}
echo "</br></br>";

/* example 3 */

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}
echo "</br></br>";

/* example 4 */

for ($i = 1; $i <= 10; print $i, $i++);
