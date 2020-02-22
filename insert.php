<?php
include "config.inc.php";

$title = $_POST['title'];
$link = $_POST['link'];

if(empty($title))
{
header("Location: error.php?error=notitle");
exit;
}
if(empty($link))
{
header("Location: error.php?error=nolink");
exit;
}
//open the database
$db = new PDO("sqlite:$dbname");
$link = preg_replace('/^(?!https?:\/\/)/', 'http://', $link);
$db->exec("INSERT INTO BookmarksTable (Title, Link) VALUES ('$title' ,'$link')");
header("Location: $mainpage"); 
?>
