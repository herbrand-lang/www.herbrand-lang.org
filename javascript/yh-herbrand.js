(function() {

    var lexer = {
        number: /[0-9]+(,[0-9]+)?/,
        atom: /[a-z][a-zA-Z0-9_]*|[\+\-\*\/\^\&\:\<\>\=\?\~\$\@\!]+/,
        variable: /[_A-Z][a-zA-Z0-9_]*/,
        l_paren: /\(/,
        r_paren: /\)/,
        bar: /\|/,
        tag: /#[a-z]+/,
        char: /'.+?'/,
        string: /"(\\\\|\\"|.)+?"/,
        comment: /;.*?\n/,
        whitespace: /\s+/
    };

    var grammar = {
        tags: "#tag #whitespace .tags | #tag",
        any: {
            rule: "#number | #atom | #variable | #char | #string | #comment | #whitespace | #bar | .list",
            fn: yh.fn.no_tag
        },
        comments: {
            rule: "#comment .comments | #comment",
            fn: yh.fn.no_tag
        },
        any2: {
            rule: ".any .any2 | .any",
            fn: yh.fn.no_tag
        },
        list: "#l_paren .any2 #r_paren | #l_paren #r_paren | #l_paren #r_paren",
        top: {
            rule: ".tags #l_paren #atom .any2 #r_paren | .tags .comments #l_paren #atom .any2 #r_paren | #l_paren #atom .any2 #r_paren",
            fn: function() {
                var type;
                arguments = Array.prototype.slice.call(arguments, 0);
                for (var i = 0; i < arguments.length; i++) {
                    var r = search(arguments[i]);
                    if (r) {
                        type = r.text;
                        break;
                    }
                }
                this.name = type;
                return this;
            }
        },
        main: ".top"
    };


    function search(data) {
        if (data.type === 'terminal' && data.name === 'atom')
            return data.token;
        else if (data.type === 'no_terminal') {
            var m = data.match;
            for (var i = 0; i < m.length; i++) {
                var r = search(m[i]);
                if (r) return r.token;
            }
        }
        return false;
    }

    s = search;

    yh.create({
        name: "herbrand",
        lexer: lexer,
        grammar: grammar,
        ignore: ["whitespace", "comment"],
        className: "yh_herbrand",
        callback: function(code) {
			// modules
			var mod = code.getElementsByClassName("module");
			for(var i = 0; i < mod.length; i++) {
				var atoms = mod[i].getElementsByClassName("atom");
				var atom = atoms[1];
				var html = atom.innerHTML;
				atoms[0].style.fontWeight = "bold";
				mod[i].setAttribute("id", "module-" + html);
				mod[i].setAttribute("name", "module-" + html);
				atom.innerHTML = "<a href=\"#module-" + html + "\">" + html + "</a>";
			}
			// predicates
			var pred = code.getElementsByClassName("predicate");
			for(var i = 0; i < pred.length; i++) {
				var atoms = pred[i].getElementsByClassName("atom");
				var atom = atoms[1];
				var html = atom.innerHTML;
				atoms[0].style.fontWeight = "bold";
				pred[i].setAttribute("id", "predicate-" + html);
				pred[i].setAttribute("name", "predicate-" + html);
				atom.innerHTML = "<a href=\"#predicate-" + html + "\">" + html + "</a>";
			}
			// callable terms
			var lists = code.getElementsByClassName("list");
			for(var i = 0; i < lists.length; i++) {
				var atom = lists[i].getElementsByClassName("atom");
				if(atom.length > 0)
					atom = atom[0];
				var html = atom.innerHTML;
				if(document.getElementById("predicate-" + html))
					atom.innerHTML = "<a href=\"#predicate-" + html + "\">" + html + "</a>";
			}
		}
    });

})();
