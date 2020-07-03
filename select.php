<?php
$link = mysqli_connect("localhost", "root");
$sql = "use tastdb;";
$result = mysqli_query($link, $sql);
$sql = "select * from tasttable;";
$result = mysqli_query($link, $sql);
while ($dbarr=mysqli_fetch_array($result)){
    echo "รหัสพนักงาน :".$dbarr['id'].
    "ชื่อ-สกุล :".$dbarr['name']."อายุ :".$dbarr['age']."<p>";
}
echo "<a href = mainfunction.html>กลับหน้าจอหลัก</a>";
mysqli_close($link);
?>