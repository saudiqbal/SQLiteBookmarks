<?php

ob_start("ob_gzhandler");
	
if (isset($_GET['error']))
$PAGES = $_GET['error'];

// Default
else $PAGES = 'blank';

switch ($PAGES)
{
// Blank 
	case 'blank': 
		$error = 'No Error Detected'; 
	break;

// No Title
	case 'notitle': 
		$error = 'Title cannot be empty'; 
	break;

// No Notes
	case 'nolink': 
		$error = 'Link cannot be empty'; 
	break;

// Default
	default: 
		$error = 'No Error Detected'; 
	break;
}
?>
<html>
<head>
<style>
.pr_subtitle  { width:500;font-weight: bold; font-size: 8pt; color: #ffffff; padding: 0px 0px 0px 0px; background-color: #ff8000; border-top: 2px solid #ffaa33; border-bottom: 2px solid #cc5500; }
.Link3 { width:500;background-color:#ffaa33;padding-top: 20; padding-bottom: 20;font-size: 16pt;}
</style>
</head>
<body>
<center><br><br><br><br><br><br>
<div class="pr_subtitle">ERROR</div>
<div class="Link3"><?php echo("$error"); ?></div>
</div>


</body>
</html>