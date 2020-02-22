<?php
include "config.inc.php";

$title = $_POST['title'];
$link = $_POST['link'];

if(empty($title))
{
header("Location: error.php?error=notitle");
exit();
}
if(empty($link))
{
header("Location: error.php?error=nolink");
exit;
}
  
$referer = $_SERVER['HTTP_REFERER'];

//Check if browser sends referrer url or not
if ($referer == "") //If not, set referrer as your domain
    $domain = $yoursite;
else
    $domain = parse_url($referer); //If yes, parse referrer

if($domain['host'] == $yoursite || $domain['host'] == $yoursite2)
{
    //open the database
    $db = new PDO("sqlite:$dbname");
$link = preg_replace('/^(?!https?:\/\/)/', 'http://', $link);
	$db->exec("INSERT INTO BookmarksTable (Title, Link) VALUES ('$title' ,'$link')");
	
    // close the database connection
    $db = NULL;

header("Location: $mainpage"); 
}
else
{
    //The referrer is not your site, we redirect to your home page
    header("Location: $yoursite2");
    exit(); //Stop running the script
}
?>
