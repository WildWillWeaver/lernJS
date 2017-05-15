<?php 
$db_host = 'localhost';
$db_user = 'admin';
$db_pass = '1111';
$db_database ='db_cook';

$link=mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_database,$link) or die ("No connect to COOKKKKK!!!!!!!!!!!!!!" .mysql_error());
mysql_query("SET names cp1251");


 ?> 
