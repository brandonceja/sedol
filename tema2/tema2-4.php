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
        <?php  
               include("../column.php");
         ?>
         <div id="content">          
            <h1>2.3 Complejos</h1>
            <p>Si algunos de los eigenvalores son complejos, con tal que sean distintos, el método descrito previamente obtiene de todas maneras <span><em>n</em></span> soluciones linealmente independientes. La única complicación es que los eigenvectores asociados con eigenvalores complejos son comúnmente complejos, de tal manera que se tendrán soluciones con valores complejos. Para obtener soluciones con valores reales, obsérvese que -debido a que se asume que la matriz <span><strong>A</strong></span> tiene sólo entradas reales- los coeficientes en la ecuación característica en serán todos reales. En consecuencia, cualesquiera eigenvalores complejos se presentarán en pares conjugados complejos. Supóngase entonces que <span><em>λ</em> = <em>p</em> + <em>q</em><em>i</em></span> y <span>$\bar{\lambda}=p-qi$</span> son un par de eigenvalores de este tipo.</p>
            <p>Si <span><strong>v</strong></span> es un eigenvector asociado con <span><em>λ</em></span>, tal que</p>
            <p><br /><span>(<strong>A</strong> − <em>λ</em><strong>I</strong>)<strong>v</strong> = 0</span><br /></p>
            <p>entonces, tomando en esta ecuación el complejo conjugado, se llega a <br /><span>$$({\mathbf{A}}- \bar{\lambda} {\mathbf{I}})\bar{{\mathbf{v}}} = 0$$</span><br /> puesto que <span>${\mathbf{A}}=\bar{{\mathbf{A}}}$</span> e <span>${\mathbf{I}}=\bar{{\mathbf{I}}}$</span> (siendo estas matrices reales) y el conjugado de un producto complejo es el producto de los conjugados de los factores. De este modo, el conjugado <span>$\bar{{\mathbf{v}}}$</span> de <span><strong>v</strong></span> será un eigenvector asociado a <span><em>λ</em></span>. Por supuesto, el conjugado de un vector se define componente a componente; si</p>
            <p><br /><span>$${\mathbf{v}}=
            \begin{bmatrix}
            a_{1}+b_{1}i\\
            a_{2}+b_{2}i\\
            \vdots \\
            a_{n}+b_{n}i
            \end{bmatrix} 
            = 
            \begin{bmatrix}
            a_{1}\\
            a_{2}\\
            \vdots \\
            a_{n}
            \end{bmatrix}
            +
            \begin{bmatrix}
            b_{1}\\
            b_{2}\\
            \vdots \\
            b_{n}
            \end{bmatrix}i
            = {\mathbf{a}}+{\mathbf{b}}i$$</span><br /></p>
            <p>entonces <span>$\bar{{\mathbf{v}}} ={\mathbf{a}}-{\mathbf{b}}i$</span>. La solución con valores complejos asociada con <span><em>λ</em></span> y <span><strong>v</strong></span> es por tanto</p>
            <p><br /><span><strong>x</strong>(<em>t</em>)=<strong>v</strong><em>e</em><sup><em>λ</em><em>t</em></sup> = <strong>v</strong><em>e</em><sup>(<em>p</em> + <em>q</em><em>i</em>)<em>t</em></sup> = (<strong>a</strong> + <strong>b</strong><em>i</em>)<em>e</em><sup><em>p</em><em>t</em></sup>(cos<em>q</em><em>t</em> + <em>i</em>sin<em>q</em><em>t</em>);</span><br /></p>
            <p>esto es, <br /><span><strong>x</strong>(<em>t</em>)=<em>e</em><sup><em>p</em><em>t</em></sup>(<strong>a</strong>cos<em>q</em><em>t</em> − <strong>b</strong>sin<em>q</em><em>t</em>)+<em>i</em><em>e</em><sup><em>p</em><em>t</em></sup>(<strong>b</strong>cos<em>q</em><em>t</em> + <strong>a</strong>sin<em>q</em><em>t</em>).</span><br /></p>
            <p>Debido a que las partes real e imaginaria de una solución de valores complejos son también soluciones, se obtienen así las dos soluciones de valores reales</p>
            <p><br /><span>$${\mathbf{x}}1(t) = \text{Re}[x(t)] = e^{pt} ({\mathbf{a}}\cos qt - {\mathbf{b}}\sen qt),$$</span><br /> <br /><span>$${\mathbf{x}}2(t) = \text{Im}[x(t)] = e^{pt} ({\mathbf{b}}\cos qt + {\mathbf{a}}\sen qt)$$</span><br /></p>
            <p>asociadas a los eigenvalores conjugados complejos <span><em>p</em> ± <em>q</em><em>i</em></span>. Es fácil verificar que las mismas dos soluciones de valores reales resultan de tomar las partes real e imagina ria de <span>$\bar{{\mathbf{v}}} e^{\bar{\lambda} t}$</span>. Más que memorizar las fórmulas anteriores, es preferible, en un ejemplo específico, proceder de la siguiente manera:</p>
            <p>Encuéntrese primero, de manera explícita, una solución de valor complejo <span><strong>x</strong>(<em>t</em>)</span> asociada con el eigenvalor complejo <span><em>λ</em></span>;</p>
            <p>Posteriormente, obténganse las partes real e imaginaria <span><strong>x</strong><sub>1</sub>(<em>t</em>)</span> y <span><strong>x</strong><sub>2</sub>(<em>t</em>)</span> para conseguir dos soluciones de valores reales independientes, correspondientes a los dos eigenvalores complejos conjugados <span><em>λ</em></span> y <span>$\bar{\lambda}$</span>.</p>
            <a href="tema2-5.php" id="next">Siguiente</a>
        </div>
   </center>
   </body>
</html>