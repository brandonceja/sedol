<input type="checkbox" class="checkbox" id="check">
<label class="menu-l" for="check">|||</label>
<div id="transition-column">
	<center><h2>Título del curso</h2></center>
	<div class="title" id="t1">
		<h3>1. Teoría básica</h3>
	</div>
	<div class="subtitle" id="s1">
		<div class="s">
			<h4 id="s1.1" >1.1. Definiciones Preliminares</h4>
			<div class="ss" id="ss1">
				<h4>1.1.1 Sistemas de primer orden</h4>
				<h4>1.1.2 Sistemas lineales de primer order</h4>
				<h4>1.1.3 Sistemas lineales de primer order homogéneo</h4>
				<h4>1.1.4 Sistemas lineales de primer order con coeficientes constantes</h4>
			</div>
		</div>
		<div class="s" id="s1.2">
			<h4>1.2. Forma Matricial</h4>
			<div class="ss" id="ss2">
				<h4>1.2.1 Representaciones matriciales de sistemas lineales con coeficientes constantes</h4>
				<h4>1.2.2 Representaciones matriciales de sistemas lineales con coeficientes constantes</h4>
			</div>
		</div>
		<div class="s" id="s1.3">
			<h4>1.3. Teoremas Básicos</h4>
			<div class="ss" id="ss3">
				<h4>1.3.1 Problema de valor inicial</h4>
				<h4>1.3.2 Existencia de una solución única</h4>
				<h4>1.3.3 Principio de superposición</h4>
				<h4>1.3.4 Dependencia linea e independencia lineal</h4>
				<h4>1.3.5 Criterio para soluciones linealmente independientes (Wronskiano)</h4>
				<h4>1.3.6 Conjunto fundamental de soluciones y solución general</h4>
			</div>
		</div>
	</div>
	<div class="title" id="t2">
		<h3>2. Método 2x2</h3>
	</div>
	<div class="subtitle" id="s2">
		<div class="s">
			<h4 id="s2.1" >2.1. Eigenvalores y eigenvectores</h4>
			<div class="ss" id="2ss1">

			</div>
		</div>
		<div class="s" id="s2.2">
			<h4>2.2. Reales distintos</h4>
			<div class="ss" id="2ss2">

			</div>
		</div>
		<div class="s" id="s2.3">
			<h4>2.3. Complejos</h4>
			<div class="ss" id="2ss3">

			</div>
		</div>
		<div class="s" id="s2.4">
			<h4>2.4. Con multiplicidad</h4>
			<div class="ss" id="2ss4">

			</div>
		</div>
	</div>
	<div class="title">
		<h3>3. Método nxn</h3>
	</div>
	<div class="subtitle">
		
	</div>
</div>
<script>
	(function(){
		let flags = [];
		let subs = ['s1', 'ss1', 'ss2', 'ss3', 's2'];

		 subs.forEach(function(e){
            flags.push(false);
         });

		document.getElementById("t1").addEventListener("click", function(){
			checkDisplay(flags[0], subs[0], 0);
		});
		document.getElementById("s1.1").addEventListener("click", function(){
			checkDisplay(flags[1], subs[1], 1);
		});
		document.getElementById("s1.2").addEventListener("click", function(){
			checkDisplay(flags[2], subs[2], 2);
		});
		document.getElementById("s1.3").addEventListener("click", function(){
			checkDisplay(flags[3], subs[3], 3);
		});
		document.getElementById("t2").addEventListener("click", function(){
			checkDisplay(flags[4], subs[4], 4);
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