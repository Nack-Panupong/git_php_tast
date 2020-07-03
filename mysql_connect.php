<?php
$link = mysqli_connect("localhost", "root");
if($link)
{
    echo "connected successfully<br>";
    echo "connection number = $link->thread_id";
    mysqli_close($link);
}
else
{
    die("could not connect:" . mysqli_error());
}
?>