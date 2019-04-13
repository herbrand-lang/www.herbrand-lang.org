<div class="container py-5">
<?php
	require("php/parsedown.php");
	$Parsedown = new Parsedown();
	
	$module = $_GET["module"];
	$name = $module == "builtin" ? "(builtin predicates)" : "(module $module)";
	
	echo "<h1 class=\"header1 mb-3\"><a href=\"\">$name</a></h1>";
	echo "<ul>";
	foreach(scandir("doc/reference/$module") as $category) {
		if($category != "." && $category != "..") {
			$name = ucfirst(implode(" ", explode("_", $category)));
			echo "<li><a href=\"#$category\">$name</a></li>";
		}
	}
	echo "</ul>";
	
	foreach(scandir("doc/reference/$module") as $category) {
		if($category != "." && $category != "..") {
			$name = ucfirst(implode(" ", explode("_", $category)));
			echo "<h2 id=\"$category\" class=\"mt-4\"><a href=\"#$category\">$name</a></h2>";
			foreach(scandir("doc/reference/$module/$category") as $predicate) {
				if($predicate != "." && $predicate != "..") {
					$name = str_replace(".md", "", $predicate);
					echo "<div id=\"$name\" class=\"predicate my-4\">";
					echo $Parsedown->text(file_get_contents("doc/reference/$module/$category/$predicate"));
					echo "</div>";
				}
			}
		}
	}
?>
<script>templates();</script>
</div>