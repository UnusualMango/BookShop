<?php

$link = mysqli_connect('localhost','root','BarkasPW303','bookshop');

if(mysqli_connect_errno())
{
	echo "Ошибка подключения к базе данных (".mysqli_connect_errno()."): ".mysqli_connect_error();
	exit();
}
?>