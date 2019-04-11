<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="José Antonio Riaza Valverde" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" href="css/fasill.css">
		<!-- jQuery first, then Popper.js, Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<!-- Herbrand -->
		<link rel="stylesheet" href="styles/main.css">
		<title>The Herbrand Programming Language</title>
	</head>
	<body>
		<div id="header">
			<div id="header-container" class="container py-3">
				<a href="http://herbrand-lang.org"><img src="images/herbrand-header.png" id="header-logo" alt="herbrand logo" /></a>
				<ul id="header-menu">
					<li><a href="/downloads">Downloads</a></li>
					<li><a href="/documentation">Documentation</a></li>
				</ul>
			</div>
		</div>
		<div id="body"> <?php include("pages/home.php"); ?> </div>
		<div id="footer">
			<div id="footer-container" class="container py-3 text-center">
				<p>Maintained by the <a href="https://github.com/herbrand-lang" target="_blank">Herbrand Team</a>. See a typo? <a href="https://github.com/herbrand-lang/www.herbrand-lang.org" title="The home of the Herbrand website" target="_blank">Send a fix here!</a></p>
				<p>&copy 2019 <a href="http://jariaza.es" target="_blank">José A. Riaza Valverde</a> | Released under the <a href="https://github.com/herbrand-lang/herbrand/blob/master/LICENSE" title="License" target="_blank">BSD 3-Clause license</a></p>
			</div>
		</div>
	</body>
</html>