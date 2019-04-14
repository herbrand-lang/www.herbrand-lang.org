function templates(module) {
	var elems = document.getElementsByClassName("predicate");
	for(var i = 0; i < elems.length; i++) {
		if(elems[i].childNodes.length > 0) {
			var code = elems[i].childNodes[0].childNodes[0];
			var text = code.innerHTML;
			var html = "";
			text = text.replace(/\(/g, "( ").replace(/\)/g, " )").replace("/  /g", " ").split("\n");
			for(var k = 0; k < text.length; k++) {
				var t = text[k].split(' ');
				for(var j = 0; j < t.length; j++) {
					if(j == 1) {
						t[j] = "<span class=\"template-name\">" + t[j] + "</span>";
					} else if(t[j] == "(" || t[j] == ")" || t[j] == "...") {
						t[j] = "<span class=\"template-parenthesis\">" + t[j] + "</span>";
					} else if(t[j][0] == "+") {
						t[j] = "<span class=\"template-add\">" + t[j] + "</span>";
					} else if(t[j][0] == "-") {
						t[j] = "<span class=\"template-minus\">" + t[j] + "</span>";
					} else if(t[j][0] == "@") {
						t[j] = "<span class=\"template-arroba\">" + t[j] + "</span>";
					} else if(t[j][0] == ":") {
						t[j] = "<span class=\"template-dpoint\">" + t[j] + "</span>";
					} else if(t[j][0] == "?") {
						t[j] = "<span class=\"template-interrogation\">" + t[j] + "</span>";
					}
				}
				if(k != 0)
					html += "\n";
				html += t.join(" ");
			}
			if(module != "builtin") {
				var name = elems[i].getAttribute("id");
				html += "<a class=\"float-right\" target=\"_blank\" href=\"/documentation/src/" + module + "#" + name + "\">#source</a>";
			}
			code.innerHTML = html;
		}
	}
}