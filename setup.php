<?php
include "config.inc.php";

  try
  {
    //open the database
    $db = new PDO("sqlite:$dbname");

    //create the database
    $db->exec("CREATE TABLE BookmarksTable (Title TEXT, Link TEXT)");
	echo "Database and Table created sucessfully.";
	
    // close the database connection
    $db = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }
?>