<?php
if ($send == null) {
?>
<form method="post" action="<?php echo $PHP_SELF ?>">
Ẻ������������������<p>
   	���ʾ�ѡ�ҹ <input type="text" name="id"><p>
	���;�ѡ�ҹ <input type="text" name="name"><p>
  	���� <input type="text" name="age"><p>
     	<input type="submit" name="send" value="Submit">
     	<input type="reset" name="cancel" value="Reset">
</form>
<?php
}
else {
	$link = mysql_connect("localhost", "root", "1234");
	$sql = "use testdb";
	$result = mysql_query($sql);
	$sql = "Insert into testtable values('$id', '$name', $age);";
	$result = mysql_query($sql);
	if ($result)
	{
		echo "�������������ŧ㹰ҹ�����Ż��ʺ���������<br>";
		mysql_close($link);
	}
	else
	{
		echo "�������ö��������������ŧ㹰ҹ��������<br>";
	}
	echo "<a href=insert.php>��Ѻ˹����纡������������</a><br>";
	echo "<a href=Mainfunction.html>��Ѻ˹�������ѡ</a><br>";
}
?>