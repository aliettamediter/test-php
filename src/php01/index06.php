<?php
function sankaku($teihen, $takasa) {
    return $teihen * $takasa / 2;
}

function sikaku($teihen, $takasa) {
    return $teihen * $takasa;
}

function daikei($joutei, $katei, $takasa) {
    return ($joutei + $katei) * $takasa / 2;
}

echo sankaku(5, 10);
echo '<br>';
echo sikaku(10, 4);
echo '<br>';
echo daikei(8,4,6);
