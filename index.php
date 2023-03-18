<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$time = date('r');
echo "Green Adventist College: {$time}\n\n";
flush();
?>