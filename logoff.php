<?php
session_start();
// Delete the cookie
setcookie ('logedin','');
// Set its time to minus 300 (more secure)
setcookie ('logedin' , '',time()-43200);
// End All Session ID'S
$_SESSION = array();
// KILL ALL SESSIONS
session_destroy();
//Rdirect User our
header('Location: index.php' );
exit();
?>