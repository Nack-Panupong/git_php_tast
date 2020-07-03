<?php
$link = mysqli_connect("localhost", "root");
mysqli_set_charset($link, "utf8");
$sql = "create database tastdb" . 
        "charecter set utf8" . 
        "collate utf8_unicode_ci";
$sql = "create database tastdb;";
$result = mysqli_query($link, $sql);

if($result)
{
    echo "สร้างฐานข้อมูลสำเร็จ<br>";
}
else
{
    echo "ไม่สามารถสร้างฐานข้อมูลได้<br>";
}

$sql = "use tastdb;";
$result = mysqli_query($link, $sql);
$sql = "create table tasttable(id varchar(3), 
        name varchar(25), age int(2), primary key(id));";
$result = mysqli_query($link, $sql);

if ($result)
{
    echo "สร้างตารางข้อมูลสำเร็จ<br>";
}
else
{
    echo "ไม่สามารถสร้างตารางข้อมูลได้<br>";
}
mysqli_close($link);
?>