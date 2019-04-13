<div class="container py-5">
	<h1 id="documentation" class="header1"><a href="#documentation">Documentation</a></h1>
	<h2 id="reference" class="header2 mt-5"><a href="#reference">Herbrand Predicate Reference</a></h2>
<?php
foreach(scandir("doc/reference/") as $module) {
	if($module != "." && $module != "..") {
		$name = $module == "builtin" ? "(builtin predicates)" : "(module $module)";
		echo "<h3 class=\"header3 mt-3\"><a href=\"documentation/reference/$module\">$name</a></h3>";
		echo "<ul>";
		foreach(scandir("doc/reference/$module") as $category) {
			if($category != "." && $category != "..") {
				$name = ucfirst(implode(" ", explode("_", $category)));
				echo "<li><a href=\"documentation/reference/$module#$category\">$name</a></li>";
			}
		}
		echo "</ul>";
	}
}
?>
</div>