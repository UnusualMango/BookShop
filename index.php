<?php
ini_set('display_errors', 1);
require "rb/rb-mysql.php";

R::setup( 'mysql:host=127.0.0.1;dbname=bookshop','root', 'BarkasPW303' );

$book = R::getAll( "SELECT * FROM books");
$str = "";

foreach ($book as $value) 
{
	$str = $value['book_id']." ".$value['name']."<br>";

	echo $str;
}
/*
echo '<pre>';
print_r($book);
echo '</pre>';
*/