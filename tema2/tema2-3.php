<?php 
   include("../head.php");
   echo '<link rel="stylesheet" href="../css/style.css">'
 ?>
<body>
<center>
    <?php 
      include("../header.php");
    ?>
    <div id="site">
        <?php  
               include("../column.php");
         ?>
         <div id="content">
            <h1>2.2 Reales distintos</h1>
            <p>Si los eigenvalores <span><em>λ</em><sub>1</sub>, <em>λ</em><sub>2</sub>, …, <em>λ</em><sub><em>n</em></sub></span> son reales y distintos, entonces se pueden obtener los eigenvectores asociados <span><strong>v</strong><sub>1</sub>, <strong>v</strong><sub>2</sub>, …, <strong>v</strong><sub><em>n</em></sub></span>. En este caso, puede demostrarse que los vectores de la solución particular dada por el siguiente método y son siempre linealmente independientes.</p>
            <p>1. Primero se resuelve la ecuación característica dada por dddd para encontrar los eigenvalores <span><em>λ</em><sub>1</sub>, <em>λ</em><sub>2</sub>, …, <em>λ</em><sub><em>n</em></sub></span> de la matriz <span><strong>A</strong></span>.</p>
            <p>2. Luego se procede a encontrar los <span><em>n</em></span> eigenvectores linealmente independientes <span><strong>v</strong><sub>1</sub>, <em>v</em>2, …, <strong>v</strong><sub><em>n</em></sub></span> asociados con estos eigenvalores.</p>
            <p>3. Se obtienen <span><em>n</em></span> soluciones linealmente independientes <br /><span>$${\mathbf{x}}_1 (t) = {\mathbf{v}}_1 e\lambda_1 t , \hspace{2em}
            {\mathbf{x}}_2 (t) = {\mathbf{v}}_2 e\lambda_2 t ,\hspace{2em}
            \dots,\hspace{2em}
            {\mathbf{x}}_n (t) = {\mathbf{v}}_n e\lambda_n t$$</span><br /></p>
            <p>En este caso, la solución general de <span><strong>x</strong> = <strong>A</strong><strong>x</strong></span> es una combinación lineal <br /><span><strong>x</strong><sub>(</sub><em>t</em>)=<em>c</em><sub>1</sub><strong>x</strong><sub>1</sub>(<em>t</em>)+<em>c</em><sub>2</sub><strong>x</strong><sub>2</sub>(<em>t</em>)+…+<em>c</em><sub><em>n</em></sub><strong>x</strong><sub><em>n</em></sub>(<em>t</em>)</span><br /> de estas <span><em>n</em></span> soluciones.</p>
            <a href="tema2-4.php" id="next">Siguiente</a>
        </div>
   </center>
   </body>
</html>