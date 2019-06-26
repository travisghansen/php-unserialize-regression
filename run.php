<?php

require __DIR__ . '/vendor/autoload.php';

$data = file_get_contents("cache.data");

$start = microtime(true);
$d = unserialize($data);
$end = microtime(true);

$time = ($end - $start);
echo "Did something in $time seconds\n";

?>
