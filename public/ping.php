<?php
$ip = $_GET['ip'] ?? '127.0.0.1';
$output = shell_exec("ping -c 1 " . $ip);
echo "<pre>$output</pre>";
?>