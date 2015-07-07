<?php
$link= mysql_connect("localhost","root","2312qqbc");
mysql_select_db('test');
$sql="select * from file_test";
$res = mysql_query($sql);
while($rs=mysql_fetch_array($res)){
	echo $rs['name']."\n";
}
mysql_close();
?>
