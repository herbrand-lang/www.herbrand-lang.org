<?php

// Current page
$_module = isset( $_GET["module"]) ? $_GET["module"] : "";
if(!file_exists("src/$_module.hb"))
	header("Location: http://herbrand-lang.org/404");

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="José Antonio Riaza Valverde" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="/styles/source.css">
		<title>(module <?php echo $_module; ?>) &#8211; The Herbrand Programming Language</title>
		<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">
		<script src="/javascript/yh.js"></script>
		<script src="/javascript/yh-herbrand.js"></script>
		<script>yh.onload();</script>
	</head>
	<body>
		<div id="header">
			<a href="http://herbrand-lang.org"><img src="/images/herbrand-header.png" id="header-logo" alt="herbrand logo" /></a>
		</div>
		<pre class="yh yh_herbrand" data-lang="herbrand"><code><?php echo file_get_contents("src/$_module.hb"); ?></code></pre>
	</body>
</html>