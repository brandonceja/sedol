<?php 
   include("../head.php");
   echo '<link rel="stylesheet" href="../css/style.css">'
 ?>
<body>
  <?php     
      include("../transition-column.php");
   ?>
<center>
    <?php 
      include("../header.php");
    ?>
    <div id="site">
         <div id="content">
         	<h1>2.1 Método del eigenvalor para sistemas de <span>2 × 2</span></h1>
          <h2>2.1.1 Eigenvalores y eigenvectores</h2>
            <p>DEFINICIÓN</p>
            <p>Eigenvalores y eigenvectores El número <span><em>λ</em></span> (cero o diferente de cero) se llama eigenvalor de la matriz <span><strong>A</strong></span> de tamaño <span><em>n</em> × <em>n</em></span> siempre que <br /><span>|<strong>A</strong> − <em>λ</em><strong>I</strong>|=0</span><br /></p>
            <p>Un eigenvector asociado con el eigenvalor l es un vector no cero v por consiguiente Av 5 lv, tal que <br /><span>(<strong>A</strong> − <em>λ</em><strong>I</strong>)<strong>v</strong> = 0.</span><br /></p>
            <p>Nótese que si <span><strong>v</strong></span> es un eigenvector asociado con el eigenvalor <span><em>λ</em></span>, de la misma manera es cualquier múltiplo escalar constante diferente de cero <span><em>c</em><strong>v</strong></span> de <span><strong>v</strong></span>; esto se concluye de la multiplicación de cada lado de la ecuación anterior por <span><em>c</em> ≠ 0</span>.</p>
            <p>TEOREMA 1</p>
            <p>Soluciones de <span><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span> con eigenvalores Sea <span><em>λ</em></span> un eigenvalor (constante) de la matriz de coeficientes <span><strong>A</strong></span> del sistema lineal de primer orden <br /><span><strong>x</strong><strong>′</strong> = <strong>A</strong><strong>x</strong></span><br /></p>
            <p>Si <span><strong>v</strong></span> es un eigenvector asociado de <span><em>λ</em></span>, entonces</p>
            <p><br /><span><strong>x</strong>(<em>t</em>)=<strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup></span><br /></p>
            <p>es una solución no trivial del sistema.</p>
            <a href="tema2-1.php" id="ant">Anterior</a>
            <a href="tema2-3.php" id="next">Siguiente</a>
             </div>
   </center>
   </body>
</html>