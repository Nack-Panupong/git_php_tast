<?php
session_start();
echo "welcome to page 1";
$_SESSION['color'] = 'green';
$_SESSION['animal'] = 'dog';
$_SESSION['time'] = time();

echo '<br /><a href="page2.php">page2</a>';
?>