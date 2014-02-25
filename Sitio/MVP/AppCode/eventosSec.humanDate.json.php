<?php

header('Content-type: application/json');

$tPath = "http://codigo.labplc.mx/~mariojim/scripts/test_conn.php?op=month"; 
$result = file_get_contents($tPath, FILE_TEXT);

 

echo($result);

?>