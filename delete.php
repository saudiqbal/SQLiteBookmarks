<?php
include "config.inc.php";

$referer = $_SERVER['HTTP_REFERER'];

//Check if browser sends referrer url or not
if ($referer == "") //If not, set referrer as your domain
    $domain = $yoursite;
else
    $domain = parse_url($referer); //If yes, parse referrer

if($domain['host'] == $yoursite || $domain['host'] == $yoursite2)
{
$rowdelete = $_GET['id']; 
//open the database

$db = new PDO("sqlite:$dbname");

//now output the data to a simple html table...
$db->exec("DELETE FROM BookmarksTable WHERE rowid = '$rowdelete'");
$db = NULL;

// echo $rowdelete;

header("Location: $referer"); 
}
else
{
    //The referrer is not your site, we redirect to your home page
    header("Location: $yoursite2");
    exit(); //Stop running the script
}

?>