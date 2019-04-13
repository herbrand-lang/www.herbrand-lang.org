<div class="container py-5">
	<h1 id="intro" class="header1 mb-3"><a href="#intro">The Herbrand Programming Language</a></h1>
	<div class="row mb-5">
			<div class="col-lg">
				<p class="text-justify text-secondary" style="font-size:120%;">Herbrand is a weakly typed, first-order logic programming language, where the program logic is expressed in terms of relations, represented as facts and rules.</p>
			</div>
			<div class="col-lg">
				<img src="/images/append.png" class="img-fluid" title="append/3 implementation in Herbrand" alt="append/3" />
			</div>
	</div>
	
	<h1 id="features" class="header1 mb-3"><a href="#features">Features</a></h1>
	<div class="row">
		<div class="col-sm mb-3">
			<h5>Terms</h5>
			<p class="text-justify">Herbrand's single data type is the term. Terms are either atoms, numbers, characters, strings, variables or lists.</p>
		</div>
		<div class="col-sm mb-3">
			<h5>Type inference</h5>
			<p class="text-justify">You don't have to explicitly write out every type in a Herbrand program. Types will be inferred by unification. However, you can write out types if you choose.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm mb-3">
			<h5>Reversibility</h5>
			<p class="text-justify">The syntax of Herbrand does not specify which arguments of a predicate are inputs and which are outputs. By reversibility, the same program can be used in different modes.</p>
		</div>
		<div class="col-sm mb-3">
			<h5>Automatic backtracking</h5>
			<p class="text-justify">Herbrand will automatically backtrack if this is necessary for satisfaying a goal.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm mb-3">
			<h5>Homoiconicity</h5>
			<p class="text-justify">A Herbrand program can be manipulated as data using the language, and thus the program's internal representation can be inferred just by reading the program itself.</p>
		</div>
		<div class="col-sm">
			<h5>Modules</h5>
			<p class="text-justify">Herbrand has a large set of built-in predicates and modules for arithmetic comparison and evaluation, atom processing, control constructs, term comparison and unification, type testing, list manipulation, etc.</p>
		</div>
	</div>
</div>