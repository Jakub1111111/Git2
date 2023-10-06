<?php
session_start();
echo 'welcome to page #1';

$_session ['favcolor'] = 'blue';
$_session ['animal'] = 'dog';
$_session ['time'] = time();
echo '<br/><a href="session2.php">page 2 </a>'
?>