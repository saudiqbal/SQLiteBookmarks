<?php
// login check
ob_start("ob_gzhandler");
header("Content-Encoding: gzip");
session_start();

if($_SESSION['logedin'] != 'saudiqbal')
{
header("Location: http://www.saudiqbal.com/bookmarks/index.php"); 
exit(); 
} 

// main page
$mainpage = "http://www.saudiqbal.com/bookmarks/main.php";
// redirect link
$redirectlocation = "http://www.saudiqbal.com/bookmarks/index.php";
// referer check
$yoursite = "saudiqbal.com"; //Your site url without http://
$yoursite2 = "www.saudiqbal.com"; //Type your domain with www. this time

// SQLite database with path
$dbname = "../db/Bookmarks.db";

?>