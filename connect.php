<?php 
$connect = mysql_connect('localhost', 'root', '');
mysql_select_db('db2');
mysql_query('SET NAMES cp1251');
mysql_query ("set character_set_client='cp1251'"); 
mysql_query ("set character_set_results='cp1251'"); 
mysql_query ("set collation_connection='cp1251_general_ci'");
?>