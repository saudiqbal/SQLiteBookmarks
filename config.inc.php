<?php
// login check
ob_start("ob_gzhandler");
header("Content-Encoding: gzip");
session_start();

if($_SESSION['logedin'] != 'saudiqbal')
{
header("Location: bookmarks/index.php"); 
exit(); 
} 

// main page
$mainpage = "bookmarks/main.php";
// redirect link
$redirectlocation = "bookmarks/index.php";
// referer check
$yoursite = "example.com"; //Your site url without http://
$yoursite2 = "www.example.com"; //Type your domain with www. this time

// SQLite database with path
$dbname = "../db/Bookmarks.db";

?>
