<?php
session_start();
echo "welcome to page 2<br>";
echo $_SESSION['color'] . '<br>';
echo $_SESSION['animal'] . '<br>';
echo date('Y M D H:i:s', $_SESSION['time']);
?>