<?php

header('Content-type: application/json');

$tPath = "http://codigo.labplc.mx/~mariojim/scripts/test_conn.php"; 
$result = file_get_contents($tPath, FILE_TEXT);

 

echo(str_replace('\n', '', $result));

?>