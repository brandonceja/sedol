<input type="checkbox" class="checkbox" id="check">
<label class="menu-l" for="check">|||</label>
<div id="transition-column">
	<center><h2>Título del curso</h2></center>
	<div class="title" id="t1">
		<h3>1. Teoría básica</h3>
	</div>
	<div class="subtitle" id="s1">
		<div class="s">
			<a href="http://www.sedolanton.com/tema1/tema1-1.php" id="s1.1" >1.1. Definiciones Preliminares</a>
		</div>
		<div class="s" id="s1.2">
			<a href="http://www.sedolanton.com/tema1/tema1-2.php">1.2. Forma Matricial</a>
		</div>
		<div class="s" id="s1.3">
			<a href="http://www.sedolanton.com/tema1/tema1-3.php">1.3. Teoremas Básicos</a>
		</div>
		<div class="s" id="s1.3">
			<a href="http://www.sedolanton.com/tema1/tema1-4.php">1.4. Representaciones gráficas, sistemas de 2x2.</a>
		</div>
	</div>
	<div class="title" id="t2">
		<h3>2. Método 2x2</h3>
	</div>
	<div class="subtitle" id="s2">
		<div class="s">
			<a href="http://www.sedolanton.com/tema2/tema2-2.php" id="s2.1" >2.1. Valores propios y vectores propios</a>
		</div>
		<div class="s" id="s2.2">
			<a href="http://www.sedolanton.com/tema2/tema2-3.php">2.2. Reales distintos</a>
		</div>
		<div class="s" id="s2.3">
			<a href="http://www.sedolanton.com/tema2/tema2-4.php">2.3. Complejos</a>
		</div>
		<div class="s" id="s2.4">
			<a href="http://www.sedolanton.com/tema2/tema2-5.php">2.4. Reales repetidos</a>
		</div>
	</div>
	<div class="title">
		<h3><a href="http://www.sedolanton.com/tema3/tema3-1.php">3. Método nxn</a></h3>
	</div>
	<div class="subtitle">
		
	</div>
</div>
<script>
	(function(){
		let flags = [];
		let subs = ['s1', 's2'];

		 subs.forEach(function(e){
            flags.push(false);
         });

		document.getElementById("t1").addEventListener("click", function(){
			checkDisplay(flags[0], subs[0], 0);
		});
		document.getElementById("t2").addEventListener("click", function(){
			checkDisplay(flags[1], subs[1], 1);
		});

		function checkDisplay(flag, sub, id){
			if(!flag){
				document.getElementById(sub).style.display = 'block';
				flags[id] = true;
			}else{
				document.getElementById(sub).style.display = 'none';
				flags[id] = false;
			}
		}
	})();
</script>